<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AgendamientoController extends Controller
{
    public function validarDatos($fecha, $nombre, $servicioRequerido, $telefono){
        $caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '\"', '<', '>', ',', '.', '?', '/'];

        if (Str::contains($nombre, $caracteresEspeciales)) {
            throw new Exception('El nombre no debe tener caracteres especiales');
        }
        if (empty($fecha) || empty($nombre) || empty($telefono) || empty($servicioRequerido)) {
            throw new Exception('Debes completar todos los campos');
        }
        if($fecha < Carbon::now('America/Bogota')->format('Y-m-d')){
            throw new Exception('La fecha no debe ser anterior a la actual');
        }
        if (Str::contains($nombre, range(0, 9))) {
            throw new Exception('El nombre ingresado no debe tener números');
        }
        if($servicioRequerido == ""){
            throw new Exception('Debes seleccionar un servicio');
        }
        if(!is_numeric($telefono)){
            throw new Exception('El teléfono debe ser un valor numérico');
        }
        if(strlen($telefono) < 7 || strlen($telefono) > 20){
            throw new Exception('El teléfono debe tener entre 7 y 10 dígitos');
        }
    }

    public function agendarCita(request $request)
    {
        try {
            $fecha = $request->input('fecha');
            $nombre = $request->input('nombre');
            $servicioRequerido = $request->input('servicio');
            $telefono = $request->input('telefono');
            $this->validarDatos($fecha, $nombre, $servicioRequerido, $telefono);

            $cita = new Cita();
            $cita->fecha = $fecha;
            $cita->nombre = $nombre;
            $cita->telefono = $telefono;
            $cita->servicioRequerido = $servicioRequerido;
            $cita->estado = 'PENDIENTE';
            $cita->save();

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('exito', 'Su cita ha sido agendada con éxito');
    }

    public function gestionarCita(Request $request, Cita $cita)
    {
        try {
            $motivo = $request->input('motivo') ?? null;
            $hora = $request->input('hora')?? null;

            if($motivo == null && $hora == null){
                throw new Exception('Selecione hora o un motivo para aceptar o rechazar citas');
            }
            

            if($hora != null){
            $cita->hora = $hora;
            $cita->estado = 'ACEPTADA';
            $cita->update();
            return redirect()->back()->with(['exito' => 'Cita aceptada exitosamente']);
            }

            $cita->motivo = $motivo;
            $cita->estado = 'RECHAZADA';
            $cita->update();
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['exito' => 'Cita rechazada exitosamente']);
    }

    public function agendar(Request $request){
        
    }
}
