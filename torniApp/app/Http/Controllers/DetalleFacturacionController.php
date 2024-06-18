<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Detallefactura;
use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;

session_start();


class DetalleFacturacionController extends Controller
{
    public function index()
    {
    }

    public function buscarCliente(Request $request)
    {
        session(['cedulaCliente' => 1212]);
        session(['nombreCliente' => 'Indefinido']);
        $cedula = $request->input('cedula');
        $cliente = null;
        if (trim($cedula) != '') {
            $cliente = Cliente::where('cedula', $cedula)->first();
            if ($cliente == null) {
                throw new Exception('No se ha encontrado el cliente con cédula: ' . $cedula);
            }
            session(['cedulaCliente' => $cedula]);
            session(['nombreCliente' => $cliente->nombre]);
            return $cliente;
        }
        return null;
    }

    //Buscar producto por nombre
    public function buscarProductoPorNombre($nombre)
    {
        $producto = Producto::where('nombre', $nombre)->first();
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

    //motodo para agregar detalles con servicio
    public function agregarServicio($request)
    {
        $servicio = $request->get('servicio');
        $costo = $request->get('costoServicio');

        if ($servicio == '') {
            throw new Exception('Debes seleccionar un servicio');
        }
        if (trim($costo) == '') {
            throw new Exception('Debes ingresar el costo del servicio');
        }
        if (!is_numeric(trim($costo)) || trim($costo) <= 0) {
            throw new Exception('El costo del servicio no es válido');
        }
        $detalles = $_SESSION['detallesFactura'];
        foreach ($detalles as $detalle) {
            if ($detalle->servicio != null) {
                if ($detalle->servicio == $servicio) {
                    throw new Exception("Este servicio ya está agregado.");
                }
            }
        }

        $detalle = new Detallefactura();
        $detalle->servicio = $servicio;
        $detalle->cantidad = 1;
        $detalle->costoDetalle =  $costo;
        array_push($_SESSION['detallesFactura'], $detalle);

        $totalActual = session('totalFactura');
        $nuevoTotal = $totalActual + $costo;
        session(['totalFactura' => $nuevoTotal]);
        
        //$totalSinIva = session('totalSinIva');
        $nuevoTotalSinIva = session('totalSinIva') + $costo;
        session(['totalSinIva' => $nuevoTotalSinIva ]);
        
    }

    //metodo para agregar detalles con producto
    public function agregarProducto($request)
    {
        $nombre = $request->get('nombreProducto');
        $cantidad = $request->get('cantidad');

        if (trim($nombre) == '') {
            throw new Exception('Debes ingresar el nombre del producto');
        }
        if (is_numeric(trim($nombre))) {
            throw new Exception('El nombre del producto no es válido');
        }
        if (!is_numeric(trim($cantidad)) || trim($cantidad) <= 0) {
            throw new Exception('La cantidad de producto ingresado no es válida');
        }

        $producto = $this->buscarProductoPorNombre($nombre);
        $detalles = $_SESSION['detallesFactura'];
        foreach ($detalles as $detalle) {
            if ($detalle->producto != null) {
                if ($detalle->producto->nombre == $producto->nombre) {
                    throw new Exception("Este producto ya está agregado.");
                }
            }
        }

        $detalle = new Detallefactura();

        $precioProducto = $producto->precioVenta;
        //$producto->update();
        $costoDetalle = $this->calcularCostodetalle($cantidad, $precioProducto);

        $stock = $producto->inventarios->get(0)->stock;
        if ($stock == 0) {
            throw new Exception("Este producto ya está agotado");
        }
        if ($cantidad > $stock) {
            throw new Exception("La cantidad ingresada es mayor que el stock disponible: Debes ingresar una cantida no mayor a " . $stock);
        }

        $detalle->cantidad = $cantidad;
        $detalle->costoDetalle = $costoDetalle;
        $detalle->productos_id = $producto->id;
        array_push($_SESSION['detallesFactura'], $detalle);

        $ivaActual = session('ivaFactura');
        $nuevoIva = $producto->iva * $detalle->cantidad + $ivaActual;
        session(['ivaFactura' => $nuevoIva]);

        $totalActual = session('totalFactura');
        $nuevoTotal = $totalActual + $costoDetalle;
        session(['totalFactura' => $nuevoTotal]);

        $totalSinIva = session('totalSinIva');
        session(['totalSinIva' => $totalSinIva + $costoDetalle * 0.81]);

        if ($stock >= 1 && ($stock-$cantidad) <= 10) {
            return redirect()->back()->with(['alerta' => "El producto que acabas de ingresar está cerca de agotarse: Solo queda " . $stock - $cantidad . " productos"]);
        }
    }

    //funcion para agregar detalles de compra en un array y retornarlo
    public function agregarDetalleFactura(Request $request)
    {
        try {

            $servicio = $request->get('servicio');
            $costo = $request->get('costoServicio');
            $this->buscarCliente($request);

            if ($costo == '' && $servicio == '') {
                $this->agregarProducto($request);
            } else {
                $this->agregarServicio($request);
            }
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return redirect()->back();
    }
    
    public function eliminarDetalle($indice)
    {
        $detalles = $_SESSION['detallesFactura'];

        $costoActual = session('totalFactura');
        $nuevoCosto = $costoActual - $detalles[$indice]->costoDetalle;
        session(['totalFactura' => $nuevoCosto]);

        if($detalles[$indice]->producto != null){
        $nuevoTotalSinIva = session('totalSinIva') - $detalles[$indice]->costoDetalle*0.81;
        session(['totalSinIva' => $nuevoTotalSinIva ]);
        
        $ivaActual = session('ivaFactura');
        session(['ivaFactura' => $ivaActual - $detalles[$indice]->costoDetalle*0.19]);
        }else{
            $nuevoTotalSinIva = session('totalSinIva') - $detalles[$indice]->costoDetalle;
            session(['totalSinIva' => $nuevoTotalSinIva]);
        }

        array_splice($detalles, $indice, 1);
        $_SESSION['detallesFactura'] = $detalles;
        if (empty($detalles)) {
            session(['totalFactura' => null]);
            session(['ivaFactura' => null]);
            session(['totalSinIva' => null]);
        }
        return redirect()->back();
    }

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

        /*public function buscarProducto(Request $request)
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
    }*/


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
}
