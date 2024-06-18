<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servicio;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function validarDatos($cedula, $placa, $modelo, $marca, $ca, $rar, $cb, $mll, $mp, $mg)
    {
        if ($ca == '' && $rar == '' && $cb == '' && $mll == '' && $mp == '' && $mg == ''
            && trim($cedula) == '' && trim($placa) == '' && trim($modelo) == '' && trim($marca) == '') {
            throw new Exception('Todos los campos estan vacíos');
        }
        if (trim($cedula) != '' && !is_numeric(trim($cedula))) {
            throw new Exception('La cédula ingresada debe ser un valor numérico');
        }
        if (trim($placa) == '') {
            throw new Exception('Ingrese la placa del vehículo');
        }
        if (trim($modelo) == '') {
            throw new Exception('Ingrese el modelo del vehículo');
        }
        if (trim($marca) == '') {
            throw new Exception('Ingrese la marca del vehículo');
        }
        if (is_numeric(trim($marca))) {
            throw new Exception('La marca del vehículo no debe ser un valor numérico');
        }
        if (is_numeric(trim($placa))) {
            throw new Exception('La placa del vehículo no debe ser un valor numérico');
        }
        if ($ca == '' && $rar == '' && $cb == '' && $mll == '' && $mp == '' && $mg == '') {
            throw new Exception('Selecciona al menos un tipo de servicio');
        }
    }
    
    public function buscarCliente($cedula)
    {
        if ($cedula != '') {
            $cliente = Cliente::where('cedula', $cedula)->first();
            if ($cliente != null) {
                return $cliente->id;
            }
            throw new Exception('No se ha encontrado el cliente concédula: ' . $cedula);
        }
        return null;
    }

    public function store(Request $request)
    {
        try {
            $tipoServicio = '';
            $cedula = $request->input('cedula') ?? '';
            $placa = $request->input('placa');
            $modelo = $request->input('modelo');
            $marca = $request->input('marca');
            $observaciones = $request->input('observaciones') ?? null;
            $ca = $request->input('ca') ?? '';
            $rar = $request->input('rar') ?? '';
            $cb = $request->input('cb') ?? '';
            $mll = $request->input('mll') ?? '';
            $mp = $request->input('mp') ?? '';
            $mg = $request->input('mg') ?? '';
            $this->validarDatos($cedula, $placa, $modelo, $marca, $ca, $rar, $cb, $mll, $mp, $mg);

            $servicios = [$ca, $rar, $cb, $mll, $mp, $mg];
            foreach($servicios as $serv){
                if($serv != ''){
                    $tipoServicio .= ' :: '. $serv;
                }
            }
            //$tipoServicio = $ca . '  ' . $rar . '  ' . $cb . '  ' . $mll . '  ' . $mp . '  ' . $mg;

            $servicio = new Servicio();
            $servicio->tipoServicio = $tipoServicio;
            $servicio->fecha = Carbon::now('America/Bogota');
            $servicio->placa = $placa;
            $servicio->marca = $marca;
            $servicio->modelo = $modelo;
            $servicio->observaciones = $observaciones;
            $servicio->clientes_id = $this->buscarCliente($cedula);
            $servicio->save();
            //notify()->success('Servicio agregado con exito');
        } catch (Exception $e) {
            return redirect()->route('servicios')->with('error', $e->getMessage());
            //return response()->json(['message' => $e->getMessage()], 500);
        }
        return redirect()->route('servicios')->with('exito', 'Servicio guardado exitosamente');
    }

    public function update(Request $request, Servicio $servicio)
    {
        try {
            
            $placa = $request->input('placa');
            $modelo = $request->input('modelo');
            $marca = $request->input('marca');
            $observaciones = $request->input('observaciones') ?? null;
            //$ca = $request->input('ca') ?? '';
            //$rar = $request->input('rar') ?? '';
            //$cb = $request->input('cb') ?? '';
            //$mll = $request->input('mll') ?? '';
            //$mp = $request->input('mp') ?? '';
            //$mg = $request->input('mg') ?? '';
            $this->validarDatos('', $placa, $modelo, $marca, 'na', 'na', 'na', 'na', 'na', 'na');
            //$tipoServicio = $ca . '  ' . $rar . '  ' . $cb . '  ' . $mll . '  ' . $mp . '  ' . $mg;
            //$servicio->tipoServicio = $tipoServicio;
            $servicio->placa = $placa;
            $servicio->marca = $marca;
            $servicio->modelo = $modelo;
            $servicio->observaciones = $observaciones;
            $servicio->update();
            //notify()->success('Servicio agregado con exito');
        } catch (Exception $e) {
            return redirect()->route('servicios')->with('error', $e->getMessage());
            //return response()->json(['message' => $e->getMessage()], 500);
        }
        return redirect()->route('servicios')->with('exito', 'Servicio actualizado exitosamente');
    }
    //busca y muestra los servicios que coninciden con el parámetro recibido
    public function buscarServicio(Request $request)
    {
        if ($request->ajax()) {
            $html = '';
            $query = $request->get('query');

            if ($query != '') {
                $servicios = Servicio::select()->orderBy('id', 'DESC')->where('placa', 'LIKE', '%' . $query . '%')
                    ->get();
            } else {
                $servicios = Servicio::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $num_rows = $servicios->count();
        if ($num_rows > 0) {

            foreach ($servicios as $servicio) {
                $html .= '
                <tr>
                    <td>
                       <button type="button" data-toggle="modal" data-target="#exampleModalCenteredScrollable' . $servicio->id . '">
                            <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                       </button>
                    </td>
                    <td class="text-center">' . $servicio->id . '</td>
                    <td class="text-center">' . $servicio->fecha . '</td>
                    <td class="text-center">
                        <div style="white-space: nowrap; overflow-x: auto; width: 200px;">' 
                         . $servicio->tipoServicio . 
                       '</div>
                    </td>
                    <td class="text-center">'. ($servicio->cliente != null ? $servicio->cliente->nombre : "NULL") . '</td>
                    <td class="text-center">' . $servicio->placa . '</td>
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

    public function destroy(string $id)
    {
        //
    }
}
