<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Detallefactura;
use App\Models\Factura;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();

class ReporteController extends Controller
{

    /**
     * Genera un reporte teniendo en cuenta 
     * el mes y año seleccionados
     */
    public function generarReporte(Request $request)
    {
        //session()->forget('productos');
        
        try{
        $mes = $request->input('mes');
        $year = $request->input('year');

        if($mes == ''){
            throw new Exception('Debes seleccionar un mes');
        }

        $compras = Compra::whereYear('fecha', $year)
        ->whereMonth('fecha', $mes)
        ->get();

        $ventas = Factura::whereYear('fecha', $year)
        ->whereMonth('fecha', $mes)
        ->get();

        $productosMasVendidos = Detallefactura::select('productos_id', DB::raw('SUM(cantidad) as total_quantity'))
        ->whereYear('fecha', $year)
        ->whereMonth('fecha', $mes)
        ->groupBy('productos_id')
        ->orderByDesc('total_quantity')
        ->limit(3)
        ->get();

        $totalVentas = 0;
        $totalCompras = 0;

        foreach($ventas as $venta){
            $detalles = $venta->detallefacturas;
            for($i = 0; $i < $detalles->count(); $i++){
                if($detalles[$i]->producto){
                    $totalVentas += $detalles[$i]->costoDetalle;
                }
            }
        }
        
        foreach($compras as $compra){
            $i = 0;
            foreach($compra->detallecompras as $detalle){
                $totalCompras += $detalle->costoDetalle;
                $i++;
            }
        }

        $totalIva = $totalCompras * 0.19;
        $utilidad = $totalVentas - $totalCompras;
        session()->put('utilidad', $utilidad);
        session()->put('ivaCompras', $totalIva);
        session()->put(['productos' => $productosMasVendidos]);

        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }        
        return redirect()->back();
    }

}
