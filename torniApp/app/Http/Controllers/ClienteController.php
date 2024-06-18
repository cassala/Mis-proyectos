<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ClienteController extends Controller
{
    private $clientes = array();

    /*public function __construct()
    {
    }*/
    public function clientes()
    {

        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {

            return redirect()->route('citasT');
        }
        $clientes = Cliente::all();
        return view('clientes', ['clientes' => $clientes]);
    }


    //validacion de los datos ingresados por el usuario en el formulario
    public function validarDatos($cedula, $nombre, $telefono, $correo)
    {
        $caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '\"', '<', '>', ',', '.', '?', '/'];

        if (Str::contains($nombre, $caracteresEspeciales)) {
            throw new Exception('El nombre no debe tener caracteres especiales');
        }
        if (trim($cedula) == '' && trim($nombre) == '' && trim($telefono) == '' && trim($correo) == '') {
            throw new Exception('Asegúrese de llenar todos los campos');
        }
        if (trim($nombre) == '') {
            throw new Exception('Ingrese el nombre del cliente');
        }
        if (trim($telefono) == '') {
            throw new Exception('Ingrese el número de teléfono del cliente');
        }
        if (!is_numeric($telefono)) {
            throw new Exception("Número de teléfono incorrecto. \n Ingresa solo valores numéricos");
        }
        if (strlen($telefono) < 7 || strlen($telefono) > 20) {
            throw new Exception('El número de teléfono ingresado no es válido');
        }
        if (trim($correo) == '') {
            throw new Exception('Debes ingresar el correo electrónico');
        }
        if (trim($cedula) == '') {
            throw new Exception('Ingrese el número de cédula del cliente');
        }
        if (Str::contains($nombre, range(0, 9))) {
            throw new Exception('El nombre ingresado no debe tener números');
        }
        if (!is_numeric($cedula)) {
            throw new Exception('El número de cédula debe ser un valor numérico');
        }
        if ($cedula < 1000000 || $cedula > 9999999999) {
            throw new Exception('El numero de cédula debe tener entre 7 y 10 dígitos');
        }
        if (
            Cliente::where('cedula', trim($cedula))->first()
        ) {
            throw new Exception('La cédula ingresada ya pertenece a un cliente');
        }
        if (
            Cliente::where('telefono', trim($telefono))->first()
        ) {
            throw new Exception('El teléfono ingresado ya pertenece a un usuario');
        }
        if (
            Cliente::where('correo', trim($correo))->first()
        ) {
            throw new Exception('El correo ingresado ya pertenece a un usuario');
        }
    }

    public function store(Request $request)
    {
        try {

            $cliente = new Cliente();
            $nombre = $request->input('nombre');
            $telefono = $request->input('telefono');
            $correo = $request->input('correo');
            $cedula = $request->input('cedula');
            $this->validarDatos($cedula, $nombre, $telefono, $correo);
            $request->validate(
                [
                    'correo' => 'email'
                ],
                [
                    'correo.email' => 'El correo ingresado no es válido'
                ]
            );

            $cliente->cedula = trim($cedula);
            $cliente->nombre = trim($nombre);
            $cliente->telefono = trim($telefono);
            $cliente->correo = trim($correo);

            $cliente->save();
        } catch (Exception $e) {
            //notify()->error('No se ha podido guardar el cliente', 'Error!');
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('exito', 'Cliente guardado exitosamente');
    }

    /*public function show(string $id)
    {
        //
    }*/
    public function showAll()
    {
        return $this->clientes;
    }

    /*public function edit(Cliente $cliente)
    {
        //return view("vistasDePrueba.editarCliente", compact('cliente'));
    }*/

    public function update(Request $request, Cliente $cliente)
    {
        try {

            $nombre = $request->input('nombre');
            $telefono = $request->input('telefono');
            $correo = $request->input('correo');
            $cedula = $request->input('cedula');
            $this->validarDatosUpdate($cedula, $nombre, $telefono, $correo, $cliente);

            $cliente->cedula = trim($cedula);
            $cliente->nombre = trim($nombre);
            $cliente->telefono = trim($telefono);
            $cliente->correo = trim($correo);

            $cliente->update();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('exito', 'Cliente actualizado exitosamente');
    }

    public function buscarCliente(Request $request)
    {

        if ($request->ajax()) {

            $html = '';
            $query = $request->get('query');

            if ($query != '') {
                $clientes = Cliente::select()->where('cedula', 'LIKE', '%' . $query . '%')
                    ->orWhere('nombre', 'LIKE', '%' . $query . '%')
                    ->get();
            } else {
                $clientes = Cliente::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $num_rows = $clientes->count();
        if ($num_rows > 0) {

            foreach ($clientes as $cliente) {
                $html .= '
                <tr>
                <td class="text-center">
                       <button type="button" data-toggle="modal" data-target="#modalmodificar' . $cliente->id . '">
                            <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                        </button>
                    </td>
                    <td class="text-center">' . $cliente->cedula . '</td>
                    <td class="text-center">' . $cliente->nombre . '</td>
                    <td class="text-center">' . $cliente->telefono . '</td>
                    <td class="text-center">' . $cliente->correo . '</td>
                <tr>
                @include("modales.editarCliente")
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

    public function validarDatosUpdate($cedula, $nombre, $telefono, $correo, $cliente)
    {
        $caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '\"', '<', '>', ',', '.', '?', '/'];

        if (Str::contains($nombre, $caracteresEspeciales)) {
            throw new Exception('El nombre no debe tener caracteres especiales');
        }
        if (trim($cedula) == '' && trim($nombre) == '' && trim($telefono) == '' && trim($correo) == '') {
            throw new Exception('Asegúrese de llenar todos los campos');
        }
        if (trim($nombre) == '') {
            throw new Exception('Ingrese el nombre del cliente');
        }
        if (trim($telefono) == '') {
            throw new Exception('Ingrese el número de teléfono del cliente');
        }
        if (!is_numeric($telefono)) {
            throw new Exception("Número de teléfono incorrecto. \n Ingresa solo valores numéricos");
        }
        if (strlen($telefono) < 7 || strlen($telefono) > 20) {
            throw new Exception('El número de teléfono ingresado no es válido');
        }
        if (trim($correo) == '') {
            throw new Exception('Debes ingresar el correo electrónico');
        }
        if (trim($cedula) == '') {
            throw new Exception('Ingrese el número de cédula del cliente');
        }
        if (Str::contains($nombre, range(0, 9))) {
            throw new Exception('El nombre ingresado no debe tener números');
        }
        if (!is_numeric($cedula)) {
            throw new Exception('El número de cédula debe ser un valor numérico');
        }
        if ($cedula < 1000000 || $cedula > 9999999999) {
            throw new Exception('El numero de cédula debe tener entre 7 y 10 dígitos');
        }
        if ($cedula != $cliente->cedula) {
            if (Cliente::where('cedula', $cedula)->first()) {
                throw new Exception('La cédula ingresada ya pertenece a un cliente');
            }
        }
        if ($telefono != $cliente->telefono) {
            if (Cliente::where('telefono', $telefono)->first()) {
                throw new Exception('El teléfono ingresado ya pertenece a un cliente');
            }
        }
        if ($correo != $cliente->correo) {
            if (Cliente::where('correo', $correo)->first()) {
                throw new Exception('El correo ingresado ya pertenece a un cliente');
            }
        }
    }
}
