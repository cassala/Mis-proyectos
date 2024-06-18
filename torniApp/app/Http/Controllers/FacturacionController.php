<?php

namespace App\Http\Controllers;

use App\Mail\EnviarFactura;
use App\Models\Cliente;
use App\Models\Factura;
use App\Models\Usuario;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Mail;

session_start();


class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    //metodo para reducir el stock de productos en el inventario
    public function reducirStock($detalles)
    {
        foreach ($detalles as $detalle) {
            if ($detalle->servicio == null) {
                $nuevoStock = $detalle->producto->inventarios->get(0)->stock - $detalle->cantidad;
                $detalle->producto->inventarios->get(0)->stock = $nuevoStock;
                $detalle->producto->inventarios->get(0)->estado = "DISPONIBLE";

                if ($nuevoStock == 0) {
                    $detalle->producto->inventarios->get(0)->estado = "AGOTADO";
                }
                if ($nuevoStock  > 0 && $nuevoStock <= 10) {
                    $detalle->producto->inventarios->get(0)->estado = "POR AGOTARSE";
                }

                $detalle->producto->inventarios->get(0)->update();
            }
        }
    }

    //metodo para calcular el costo total de la factura
    public function costoTotal($detalles)
    {
        $costoTotal = 0;
        foreach ($detalles as $detalle) {
            $costoTotal = $costoTotal + $detalle->costoDetalle;
        }
        return $costoTotal;
    }

    public function guardarDetallesFactura($fecha, $detalles, $id)
    {
        foreach ($detalles as $detalle) {
            $detalle->facturas_id = $id;
            $detalle->fecha = $fecha;
            $res = $detalle->save();

            if ($res == false) {
                return $res;
            }
        }
        return true;
    }

    public function buscarCliente(Request $request)
    {
        session(['cedulaCliente' => 1212]);
        session(['nombreCliente' => 'Indefinido']);
        $cedula = $request->input('nuip');
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

    //Crea y guarda el pdf y retorna la ruta del archivo
    public function generarPdf($cedula, bool $show)
    {
        $pdfPatch = null;

        if ($cedula > 1212) {
            $pdfPatch = storage_path('app/public/pdf/' . session('idFactura') . '.pdf');
        } else {
            session(['cedulaCliente' => 1212]);
            session(['nombreCliente' => 'Indefinido']);
            $pdfPatch = storage_path('app/public/pdf/' . session('idFactura') . '.pdf');
        }

        $pdf = PDF::loadView('modales.modalFactura');
        $pdf->save($pdfPatch);

        if ($cedula > 1212) {
            $cliente = Cliente::where('cedula', $cedula)->first();
            $datos = [
                "to" => $cliente->correo,
                "name" => "Recibido wwww",
                "link" => config('http://127.0.0.1:8000/'),
                "pdf" => $pdfPatch
            ];
            Mail::to($cliente->correo)->send(new EnviarFactura($datos));
        }

        return $show ? $pdf->stream() : session('idFactura') . '.pdf';
    }
    //calcula el total del iva
    public function totalIva($detalles)
    {
        $ivaTotal = 0;
        foreach ($detalles as $detalle) {
            if ($detalle->producto != null) {
                $ivaTotal += $detalle->producto->iva;
            }
        }
        return $ivaTotal;
    }

    public function store(Request $request)
    {
        try {
            //if (isset($_SESSION['detallesFactura'])) {
            $detalles = $_SESSION['detallesFactura'];
            if (empty($detalles)) {
                throw new Exception('Primero debes agregar detalles de factura');
            }
            $factura = new Factura();
            $fechaActual = Carbon::now('America/Bogota');
            $costoTotal = $this->costoTotal($detalles);
            $totalIva = $this->totalIva($detalles);

            session(['fechaFactura' => $fechaActual]);
            $lastId = Factura::max('id');
            session(['idFactura' => $lastId + 1]);

            $idActor = session('idActor');
            $factura->fecha = $fechaActual;
            $factura->costoTotal = $costoTotal;
            $factura->totalIva = $totalIva;

            $cedula = session('cedulaCliente');
            $cliente = null;
            if ($cedula  > 1212) {
                $cliente = Cliente::where('cedula', $cedula)->first();
            }

            if ($cliente != null) {
                $factura->clientes_id = $cliente->id;
            }

            $this->asignarIdVendedor($idActor, $factura);

            $res = false;

            if (!empty($detalles)) {
                $factura->pdfFactura = $this->generarPdf(session('cedulaCliente'), false);
                $factura->save();
                $res = $this->guardarDetallesFactura($fechaActual, $detalles, $factura->id);
                session(['pdf' => $factura->pdfFactura]);
                session(['fecha' => $factura->id]);
                $this->reducirStock($detalles);
                $_SESSION['detallesFactura'] = array();
                session(['ivaFactura' => null]);
                session(['totalFactura' => null]);
                session(['cedulaCliente' => null]);
                session(['nombreCliente' => null]);
                session(['idFactura' => null]);
                session(['fechaFactura' => null]);
                session(['cambio' => null]);
                session(['efectivo' => null]);
                session(['totalSinIva' => null]);
            }

            if (!$res) {
                $factura->delete();
                $_SESSION['detallesFactura'] = array();
                throw new Exception('Primero debes agregar detalles de factura');
            }
            //}
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['facturaEmitida' => 'Factura registrada exitosamente']);
    }

    public function asignarIdVendedor($cedula, $factura)
    {
        $usuario = Usuario::where('cedula', $cedula)->first();

        if ($factura != null) {
            $factura->usuarios_id = $usuario->id;
            session(['vendedor' => $usuario->nombre]);
        }
    }

    //metodo que calcula el cambio 
    public function calcularCambio(Request $request)
    {
        if ($request->ajax()) {
            $efectivo = $request->get('efectivo');
            $costoTotalFactura = session('totalFactura');
            $cambio = $efectivo - $costoTotalFactura;
        }

        $data = array(
            'cambio' => $cambio >= 0 ? number_format($cambio) : null
        );

        return response($data, JSON_UNESCAPED_UNICODE);
    }

    public function cargarDatosFactura(Request $request)
    {
        try {
            $detalles = $_SESSION['detallesFactura'];
            if (empty($detalles)) {
                throw new Exception('Primero debes agregar detalles de factura');
            }
            $this->buscarCliente($request);
            $cambio = $request->input('cambio');
            $efectivo = $request->input('efectivo');

            if ($efectivo == '') {
                throw new Exception('Primero debes ingresar el efectivo');
            }

            if ($efectivo < session('totalFactura')) {
                throw new Exception('El efectivo debe ser mayor al total a pagar');
            }

            $fecha = Carbon::now('America/Bogota');
            $lastId = Factura::max('id');

            session(['cambio' => $cambio]);
            session(['efectivo' => $efectivo]);

            session(['idFactura' => Factura::max('id') + 1]);
            session(['fechaFactura' => $fecha->format('d/m/y')]);
            session(['fecha' => $lastId + 1]);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return redirect()->back()->with(['previsualizar' => 'Mostrar modal']);
    }

    //busca y muestra las facturas al ingresar una fecha
    public function buscarFacturasPorFecha(Request $request)
    {
        if ($request->ajax()) {

            $html = '';
            $date = $request->get('fecha');

            if ($date != '') {
                $facturas = Factura::whereDate('fecha', $date)
                    ->get();
            } else {
                $facturas = Factura::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $num_rows = $facturas->count();
        if ($num_rows > 0) {

            foreach ($facturas as $factura) {
                $cliente = $factura->cliente->nombre ?? '1212-Indefinido';
                $html .= '
                <tr>
                    <td class="text-center">
                        <button type="button"><a href="/storage/pdf/' . $factura->pdfFactura . '" target="_blank"><span class="iconify" data-icon="carbon:data-view-alt" id="sell-card"></span>
                        </button>
                    </td>
                    <td class="text-center">' . $factura->id . '</td>
                    <td class="text-center">' . $factura->fecha->format('d/m/y') . '</td>
                    <td class="text-center">' . $cliente . '</td>
                    <td class="text-center">' . $factura->costoTotal . '</td>
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

    //busca y muestra la factura al ingresar su id
    public function buscarFacturasPorId(Request $request)
    {
        if ($request->ajax()) {

            $html = '';
            $idFactura = $request->get('idFactura');

            if ($idFactura != '') {
                $facturas = Factura::where('id', 'LIKE', '%' . $idFactura . '%')
                    ->take(10)
                    ->get();
            } else {
                $facturas = Factura::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $num_rows = $facturas->count();
        if ($num_rows > 0) {
            foreach ($facturas as $factura) {
                $cliente = $factura->cliente->nombre ?? '1212-Indefinido';
                $html .= '
                <tr>
                    <td class="text-center">
                        <button type="button"><a href="/storage/pdf/' . $factura->pdfFactura . '" target="_blank"><span class="iconify" data-icon="carbon:data-view-alt" id="sell-card"></span>
                        </button>
                    </td>
                    <td class="text-center">' . $factura->id . '</td>
                    <td class="text-center">' . $factura->fecha->format('d/m/y') . '</td>
                    //<td class="text-center">' . $cliente . '</td>
                    <td class="text-center">' . $factura->costoTotal . '</td>
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

    /*public function mostrarPdf(Factura $factura)
    {

        $pdf = PDF::loadFile(storage_path('/pdf/'. $factura->pdfFactura));
        return $pdf->stream($factura->pdfFactura);
    }*/
}
