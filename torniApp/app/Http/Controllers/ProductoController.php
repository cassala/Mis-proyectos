<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Proveedor;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function validarDatos($codigo, $nombre, $precioCompra, $precioVenta, $tipoProducto, $telefono)
    {
        $caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '\"', '<', '>', ',', '.', '?', '/'];

        if (Str::contains($nombre, $caracteresEspeciales)){
            throw new Exception('El nombre no debe tener caracteres especiales');
        }
        if (trim($codigo) == '') {
            throw new Exception('Ingrese el codigo del producto');
        }
        if (trim($nombre) == '') {
            throw new Exception('Ingrese el codigo del producto');
        }
        if (trim($precioCompra) != '' && !is_numeric($precioCompra)) {
            throw new Exception("El precio de compra debe ser un valor numérico");
        }
        if ($precioCompra <= 0) {
            throw new Exception("El precio de compra debe ser mayor a cero");
        }
        if ($precioVenta < $precioCompra) {
            throw new Exception("El precio de venta debe ser mayor al precio de compra");
        }
        if(!is_numeric($precioVenta)){
            throw new Exception('El precio de venta debe ser un valor numérico');
        }
        if (trim($tipoProducto) == '') {
            throw new Exception('Ingrese el tipo de producto');
        }
        if ((trim($telefono) == '')) {
            throw new Exception('La marca del proveedor no puede ser vacia');
        }
    }

    public function buscarProveedor($telefono){
        $res = Proveedor::where('marcaDistribuida', $telefono)->first();
        if(!$res){
             throw new Exception('No se ha encontrado el proveedor con marca: '.$telefono); 
        }
        if(!$res->activo){
            throw new Exception('No se ha encontrado el proveedor con marca: '.$telefono); 
       }
        return $res;
    }

    public function store(Request $request)
    {
        try {

            $producto = new Producto();
            $codigo = $request->input('codigo');
            $nombre = $request->input('nombre');
            $precioCompra = $request->input('precioCompra');
            $precioVenta = $request->input('precioVenta');
            $tipoProducto = $request->input('tipoProducto');
            $telefono = $request->input('telefono');

            $this->validarDatos($codigo, $nombre, $precioCompra, $precioVenta, $tipoProducto, $telefono);
            
            if (Producto::where('codigo', $codigo)->first()) {
                throw new Exception('Ya existe un producto con codigo: '.$codigo);
            }
            if (Producto::where('nombre', $nombre)->first()) {
                throw new Exception('Ya existe un producto con nombre: '.$nombre);
            }

            $proveedor  = $this->buscarProveedor(trim($telefono));            
            $producto->codigo = trim($codigo);
            $producto->nombre = trim($nombre);
            $producto->precioCompra = trim($precioCompra);
            $producto->precioVenta = trim($precioVenta);
            $producto->tipoProducto = trim($tipoProducto);
            $producto->proveedores_id = $proveedor->id;
            $producto->iva = $producto->precioVenta * 0.19;

            $producto->save();
            $inventario = new Inventario();
            $inventario->productos_id = $producto->id;
            $inventario->stock = 0;
            $inventario->estado = "AGOTADO";
            $inventario->save();

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['message' => 'Producto guardado exitosamente']);
    }
    

    public function show(string $id)
    {
        //
    }

    public function showAll()
    {
        return Producto::all();
    }

    public function edit(Producto $producto)
    {
    
    }

    public function update(Request $request, Producto $producto)
    {
        try {
            $codigo = $request->input('codigo');
            $nombre = $request->input('nombre');
            //$precioCompra = $producto->precioCompra;
            $costo = $request->input('precioCompra');
            $precioVenta = $request->input('precioVenta');
            $tipoProducto = $request->input('tipoProducto');
            $id = $producto->proveedores_id;
            $this->validarDatos($codigo, $nombre, $costo, $precioVenta, $tipoProducto, $id);

            if ($codigo != $producto->codigo) {
                if (Producto::where('codigo', $codigo)->first()) {
                    throw new Exception('El codigo ingresado ya pertenece a un producto');
                }
            }
            if ($nombre != $producto->nombre) {
                if (Producto::where('nombre', $nombre)->first()) {
                    throw new Exception('El nombre ingresado ya pertenece a un producto');
                }
            }

            $producto->codigo = trim($codigo);
            $producto->nombre = trim($nombre);
            $producto->precioVenta = trim($precioVenta);
            $producto->precioCompra = trim($costo);
            $producto->iva = $producto->precioVenta * 0.19;
            $producto->tipoProducto = $tipoProducto;

            $producto->update();

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['message' => 'Producto actualizado exitosamente']);
    }
    public function destroy(string $id)
    {
        //
    }

    

    public function filtrarProducto(Request $request)
    {
        if ($request->ajax()) {
            $html = '';
            $query = $request->get('query');

            if ($query != '') {
                $productos = producto::select()->where('nombre', 'LIKE', '%' . $query . '%')
                    ->orWhere('codigo', 'LIKE', '%' . $query . '%')
                    ->get();
            } else {
                $productos = producto::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $num_rows = $productos->count();
        if ($num_rows > 0) {

            foreach ($productos as $producto) {
                $html .= '
                <tr>
                    <td class="">
                        <button type="button" data-toggle="modal" style="margin-left: 20px; margin-right: -25px" data-target="#exampleModalCenteredScrollable'. $producto->id .'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="rgb(246, 58, 61)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                    <path d="M18.375 2.625a2.121 2.121 0 1 1 3 3L12 15l-4 1l1-4Z" />
                                </g>
                            </svg>
                        </button>
                    </td>
                    <td class="text-center">' . $producto->codigo . '</td>
                    <td class="text-center">' . $producto->nombre . '</td>
                    <td class="text-center">' . $producto->tipoProducto . '</td>
                    <td class="text-center">' . $producto->inventarios->get(0)->stock . '</td>
                    <td class="text-center">' . $producto->proveedor->nombre . '</td>
                    <td class="text-center">' . $producto->inventarios->get(0)->estado . '</td>
                    <td class="text-center">' . $producto->precioCompra . '</td>
                    <td class="text-center">' . $producto->precioVenta . '</td>
                <tr>
                ';
            }
        } else {
            $html .= '
            <tr>
                <td align="center" colspan="5">Sin resultados</td>
            <tr>';
        }
        $data = array(
            'table_data' => $html
        );

        return response($data, JSON_UNESCAPED_UNICODE);
    }
}
