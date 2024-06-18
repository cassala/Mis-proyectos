<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\Usuario;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
session_start();

class CompraController extends Controller
{
    public function costoTotal($detalles)
    {
        $costoTotal = 0;
        foreach ($detalles as $detalle) {
            $costoTotal = $costoTotal + $detalle->costoDetalle;
        }
        return $costoTotal;
    }

    public function guardarDetallesCompra($detalles, $idCompra)
    {
        foreach ($detalles as $detalle) {
            $detalle->compras_id = $idCompra;
            
            $res = $detalle->save();
            $producto = Producto::where('id', $detalle->productos_id)->first();
            $producto->precioCompra = $detalle->costoDetalle / $detalle->cantidad;
            $producto->update();

            if ($res == false) {
                return $res;
            }
        }
        return true;
    }

    public function aumentarStock($detalles)
    {
        foreach ($detalles as $detalle) {
            $nuevoStock = $detalle->producto->inventarios->get(0)->stock + $detalle->cantidad;
            $detalle->producto->inventarios->get(0)->stock = $nuevoStock;
            $detalle->producto->inventarios->get(0)->estado = "DISPONIBLE";

            if ($nuevoStock <= 10) {
                $detalle->producto->inventarios->get(0)->estado = "POR AGOTARSE";
            }

            $detalle->producto->inventarios->get(0)->update();
        }
    }

    public function store(Request $request)
    {
        try {
            $detalles = $_SESSION['detallesCompra'];
            $compra = new Compra();
            $fechaActual = Carbon::now('America/Bogota');
            $costoTotal = $this->costoTotal($detalles);

            $idActor = session('idActor');
            $compra->fecha = $fechaActual;
            $compra->costoTotal = $costoTotal;
            $compra->usuarios_id = Usuario::where('cedula', $idActor)->first()->id;
            $res = false;
            if (!empty($detalles)) {
                $compra->save();
                $res = $this->guardarDetallesCompra($detalles, $compra->id);
                $this->aumentarStock($detalles);
                $_SESSION['detallesCompra'] = array();
                session(['costoTotalCompra' => null]);
            }

            if (!$res) {
                $compra->delete();
                throw new Exception('No se ha podido registrar la compra: Debe ingresar detalles');
            }

            //}
        } catch (Exception $e) {
            //Alert::error('Error:', 'No se ha podido registrar la compra: Debe ingresar detalles');
            //return response()->json(['error' => $e->getMessage()], 500);
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['message' => 'Compra guardada exitosamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
