<?php

namespace App\Http\Controllers;

use App\Models\Detallecompra;
use App\Models\Producto;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

session_start();

class DetalleCompraController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    //metodo para validar los datos ingresados en el formulario
    public function validarDatos($nombre, $cantidad, $costoProducto)
    {
        if (trim($nombre) == '' && trim($cantidad) == '' && trim($costoProducto) == '') {
            throw new Exception('Asegúrese de ingresar todos los datos');
        }
        if (trim($nombre) == '') {
            throw new Exception('Ingrese el nombre del producto');
        }
        if ($cantidad < 1) {
            throw new Exception('La cantidad del producto debe ser mayor que cero');
        }
        if (!is_numeric($cantidad)) {
            throw new Exception('La cantidad debe ser un valor numérico');
        }
        if (!is_numeric($costoProducto)) {
            throw new Exception('El costo debe ser un valor numérico');
        }
        if ($costoProducto < 1) {
            throw new Exception('El costo del producto debe ser mayor que cero');
        }
    }

    //Buscar producto por nombre
    public function buscarProductoPorNombre(string $nombre)
    {
        $producto = Producto::select()->where('nombre', $nombre)->first();
        if ($producto == null) {
            throw new Exception('No se ha encontrado el producto con nombre ' . $nombre);
        }
        return $producto;
    }
    //metodo para calcular el costo de un detalle de compra
    public function calcularCostodetalle($cantidad,  $costoProducto)
    {
        return $costoProducto * $cantidad;
    }
    //funcion para agregar detalles de compra en un array y retornarlo
    public function agregarDetalleCompra(Request $request)
    {

        try {
            $detalle = new Detallecompra();
            $nombre = $request->input('nombreProducto');
            $cantidad = $request->input('cantidad');
            $precioCompra = $request->input('costo');
            $this->validarDatos($nombre, $cantidad, $precioCompra);

            $producto = $this->buscarProductoPorNombre($nombre);
            $detalles = $_SESSION['detallesCompra'];
            foreach ($detalles as $detalle) {
                if ($detalle->producto != null) {
                    if ($detalle->producto->nombre == $producto->nombre) {
                        throw new Exception("Este producto ya está agregado.");
                    }
                }
            }

            $producto->precioCompra = $precioCompra;

            $costoDetalle = $this->calcularCostodetalle($cantidad, $precioCompra);
            $detalle->cantidad = $cantidad;
            $detalle->costoDetalle = $costoDetalle;
            $detalle->productos_id = $producto->id;

            $costoActual = session('costoTotalCompra');
            $nuevoCosto = $costoActual + $detalle->costoDetalle;
            session(['costoTotalCompra' => $nuevoCosto]);

            array_push($_SESSION['detallesCompra'], $detalle);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['message' => 'Detalle agregado exitosamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminarDetalle($indice)
    {
        //$indice = $request->input('indice');

        $detalles = $_SESSION['detallesCompra'];

        $costoActual = session('costoTotalCompra');
        $nuevoCosto = $costoActual - $detalles[$indice]->costoDetalle;
        session(['costoTotalCompra' => $nuevoCosto]);

        array_splice($detalles, $indice, 1);
        $_SESSION['detallesCompra'] = $detalles;
        
        //return response()->json(['message' => 'Elemento Eliminado']);
        return redirect()->back();
    }

    //Buscador con autocompletado
    /*public function buscarProducto(Request $request)
    {
        if ($request->ajax()) {

            $html = '';
            $query = $request->get('query');

            if ($query != '') {
                $productos = Producto::select()->where('nombre', 'LIKE', '%' . $query . '%')
                    ->orWhere('codigo', 'LIKE', '%' . $query . '%')->take(2)
                    ->get();
            } else {
                $productos = Producto::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $num_rows = $productos->count();
        if ($num_rows > 0) {

            foreach ($productos as $producto) {
                $html .= '<li> ' . $producto->nombre . '</li>';
            }
        } else {
            $html .= '<li></li>';
        }
        $data = array(
            'table_data' => $html
        );

        return response($data, JSON_UNESCAPED_UNICODE);
    }*/

    public function buscarProducto(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');

            $productos = Producto::select('nombre')
            ->where('nombre', 'LIKE' , '%' . $query .'%')
            ->orwhere('codigo', 'LIKE', '%' . $query .'%')
            ->take(5)
            ->get();

        $options = '';
        foreach ($productos as $producto) {
            $options .=  '<option value="' . $producto->nombre .'">';
        }

        $html = '<input list="productos" name="productos" id="productos">
        <datalist id="productos">' . $options .'</datalist>';

        //llama a la funcion para limitar las opciones del datalist a 5 elementos
        $html .= '<script>limitarOpcionesDatalist("productos",5);</script>';

        return response($options);
        }
    }

}
