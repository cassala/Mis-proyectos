<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use Exception;
use Illuminate\Http\Request;

class AgendamientoController extends Controller
{

    public function storeagendamiento(request $request)
    {
        include('conexion.php');
        $fecha = '';
        $nombre = '';
        $telefono = '';
        $servicioRequerido = '';
        $estado = 'PENDIENTE';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

            $fecha = $_POST['fecha'];
            $nombre = $_POST['nombre'];
            $servicioRequerido = $_POST['servicio'];
            $telefono = $_POST['telefono'];

            if (empty($fecha) || empty($nombre) || empty($telefono) || empty($servicioRequerido)) {
                echo "";
                die();
            }

            $consulta = "INSERT INTO citast (fecha, servicioRequerido, estado, nombre, telefono)values('$fecha','$servicioRequerido','$estado', '$nombre', '$telefono')";

            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
                return redirect()->route('agendamiento');
            } else {
                echo "no insertados";
            }
            mysqli_close($conexion);
        }
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
            //$cita->motivo = $motivo;
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
}
