<?php

namespace App\Http\Controllers;

use App\Mail\EnviarCorreo;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    public function __construct()
    {
    }

    public function usuarios()
    {
        if(!Session::has('idActor')){
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if(session('rol') == 'TECNICO'){        
            return redirect()->route('citasT');
        }
        if(session('rol') == 'ADMINISTRADOR'){
            return redirect()->route('home')->with(['error' => 'Para ingresar a la interfaz de reportes debes tener permisos']);
        }
        $usuarios = Usuario::get();
        return view('usuarios', compact('usuarios'));
    }

    public function create()
    {
        //
    }
    public function validarDatosInsert($cedula, $nombre, $telefono, $correo, $contrasenia, $rol)
    {
        $caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '\"', '<', '>', ',', '.', '?', '/'];

        if (Str::contains($nombre, $caracteresEspeciales)){
            throw new Exception('El nombre no debe tener caracteres especiales');
        }
        if (trim($cedula) == '' && trim($nombre) == '' && trim($telefono) == '' && trim($correo) == '') {
            throw new Exception('Debes diligenciar todos los campos');
        }
        if (trim($nombre) == '') {
            throw new Exception('Ingrese su nombre completo');
        }
        if (trim($telefono) == '') {
            throw new Exception('Ingrese su número de teléfono');
        }
        if (!is_numeric($telefono)) {
            throw new Exception("El teléfono debe ser un valor numérico");
        }
        if (is_numeric($nombre)) {
            throw new Exception("El nombre no debe ser un valor numérico");
        }
        if (strlen($telefono) < 7 || strlen($telefono) > 10) {
            throw new Exception('El número de teléfono debe tener entre 7 y 10 digitos positivos');
        }
        if (trim($correo) == '') {
            throw new Exception('Debes ingresar el correo electrónico');
        }
        if (trim($cedula) == '') {
            throw new Exception('Ingrese el número de cédula');
        }
        if (!is_numeric($cedula)) {
            throw new Exception('La cédula debe ser un valor numérico');
        }
        if ($cedula < 1000000 || $cedula > 9999999999) {
            throw new Exception('El número de cédula debe tener entre 7 y 10 dígitos positivos');
        }
        if (!preg_match('/[0-9]/', $contrasenia) || !preg_match('/[^a-zA-Z0-9]/', $contrasenia) || !preg_match('/^(?=.*[a-zA-Z]).*$/', $contrasenia)) {
            throw new Exception("La contraseña debe contener letras, número y caracter especial");
        }if ($rol == '') {
            throw new Exception("Seleccione el rol del usuario");
        }
    }
    public function validarDatos($nombreUsuario, $contrasenia, $rol = null)
    {
        if (trim($nombreUsuario) == '' && trim($contrasenia) == '') {
            throw new Exception("Debe diligenciar todos los campos");
        }
        if (trim($nombreUsuario) == '') {
            throw new Exception('Ingrese el nombre de usuario');
        }
        if (trim($contrasenia) == '') {
            throw new Exception('Ingrese la contraseña');
        }
        if (strlen($contrasenia) < 8) {
            throw new Exception('La contraseña debe tener mínimo 8 caracteres');
        }
        if (strlen($nombreUsuario) < 6) {
            throw new Exception('El nombre de usuario debe tener mínimo 6 caracteres');
        }
        if (strlen($contrasenia) > 16) {
            throw new Exception('La contraseña no debe tener mas de 16 caracteres');
        }
        if (!preg_match('/[0-9]/', $contrasenia) || !preg_match('/[^a-zA-Z0-9]/', $contrasenia) || !preg_match('/^(?=.*[a-zA-Z]).*$/', $contrasenia)) {
            throw new Exception("La contraseña debe contener letras, número y caracter especial");
        }
        if ($rol == '' && $rol != null) {
            throw new Exception("Seleccione el rol del usuario");
        }
        //if (Usuario::where('nombreUsuario', trim($nombreUsuario))->first()) {
        //    throw new Exception('El nombre de usuario ya está registrado');
        //}
    }

    public function allUsers()
    {
        $all = Usuario::get();
        return $all;
    }
    public function store(Request $request)
    {
        try {

            $cedula = $request->input('cedula');
            $nombre = $request->input('nombre');
            $telefono = $request->input('telefono');
            $correo = $request->input('correo');
            $nombreUsuario = $request->input('nombreUsuario');
            $contrasenia = $request->input('password');
            $rol = $request->input('rol');
            $this->validarDatosInsert($cedula, $nombre, $telefono, $correo, $contrasenia, $rol);
            $request->validate(
                [
                    'correo' => 'email'
                ],
                [
                    'correo' => 'Ingrese un correo electrónico válido'
                ]
            );

            if(Usuario::where('correo', $correo)->first()) {
                throw new Exception('El correo ingresado ya está registrado');
            }
            if(Usuario::where('telefono', $telefono)->first()) {
                throw new Exception('El telefono ingresado ya está registrado');
            }
            if (Usuario::where('nombreUsuario', trim($nombreUsuario))->first()) {
                throw new Exception('El nombre de usuario ya está registrado');
            }
            if (Usuario::where('cedula', trim($cedula))->first()) {
                throw new Exception('La cédula ingresada ya está registrada');
            }
            $usuario = new Usuario();
            $usuario->cedula = trim($cedula);
            $usuario->nombre = strtoupper(trim($nombre));
            $usuario->telefono = trim($telefono);
            $usuario->correo = trim($correo);
            $usuario->nombreUsuario = trim($nombreUsuario);
            $usuario->contrasenia = password_hash(trim($contrasenia), PASSWORD_DEFAULT, ['cost' => 5]);
            $usuario->rol = $rol;
            $usuario->save();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('exito', 'Usuario guardado exitosamente');
    }

    public function show(string $id)
    {        //
    }

    public function showAll()
    {
        return Usuario::all();
    }

    public function edit(string $id)
    {        //
    }

    public function actualizarPassword(Request $request)
    {
        try {
            $nombreUsuario = $request->input('nombreUsuario');
            $contrasenia = $request->input('password');
            $this->validarDatos($nombreUsuario, $contrasenia, $rol = null);

            $usuario = $this->autenticarNombreUsuario(trim($nombreUsuario));
            $usuario->contrasenia = password_hash(trim($contrasenia), PASSWORD_DEFAULT, ['cost' => 5]);
            $usuario->update();
            notify()->success('Contraseña actualizada con éxito');
            session()->flush();
        } catch (Exception $e) {
            return redirect()->back()->with('mensajeError', $e->getMessage());
        }

        return redirect()->route('interfaz.login');
    }

    public function update(Request $request, Usuario $usuario)
    {
        try {
            $cedula = $request->input('cedula');
            $nombre = $request->input('nombre');
            $telefono = $request->input('telefono');
            $correo = $request->input('correo');
            $this->validarDatosUpdate($cedula, $nombre, $telefono, $correo, $usuario);

            $usuario->cedula = trim($cedula);
            $usuario->nombre = strtoupper(trim($nombre));
            $usuario->telefono = trim($telefono);
            $usuario->correo = trim($correo);
            $usuario->update();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('exito', 'Usuario actualizado exitosamente');
    }

    public function autenticarNombreUsuario($nombreUsuario)
    {
        $usuario = null;
        $usuario = Usuario::where('nombreUsuario', $nombreUsuario)->first();
        if ($usuario == null) {
            throw new Exception("No se ha encontrado el usuario");
        }
        return $usuario;
    }

    public function autenticarContrasenia(Usuario $usuario, $contrasenia)
    {
        if (password_verify($contrasenia, $usuario->contrasenia) == false) {
            throw new Exception('Contraseña incorrecta');
        }
    }

    public function iniciarSesion(Request $request)
    {
        try {
            $nombreUsuario = $request->input('nombreUsuario');
            $contrasenia = $request->input('password');

            if (trim($nombreUsuario) == '' && trim($contrasenia) == '') {
                throw new Exception('Ingrese su nombre de usuario y contraseña');
            }

            if (trim($nombreUsuario) == '') {
                throw new Exception('Ingrese su nombre de usuario');
            }
            if (trim($contrasenia) == '') {
                throw new Exception('Ingrese su contraseña');
            }

            $usuario = $this->autenticarNombreUsuario(trim($nombreUsuario));

            $this->autenticarContrasenia($usuario, trim($contrasenia));
            session_start();
            Session::put('idActor', $usuario->cedula);
            Session::put('rol', $usuario->rol);
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->route('home');
    }

    public function enviarCorreo(Request $request)
    {
        try {
            $request->validate(
                [
                    'nombreUsuario' => 'required'
                ],
                [
                    'nombreUsuario.required' => 'Ingrese su nombre de usuario',
                ]
            );

            $nombreUsuario = $request->input('nombreUsuario');
            $usuario = $this->autenticarNombreUsuario($nombreUsuario);
            $correo = Usuario::where('nombreUsuario', $nombreUsuario)->first()->correo;

            $datos = [
                "to" => $correo,
                "name" => $usuario->nombreUsuario,
                "link" => config('http://127.0.0.1:8000/'),
            ];

            Mail::to($usuario->$correo)->send(new EnviarCorreo($datos));
            //notify()->success('Correo enviado para restablecer la contraseña');
        } catch (Exception $e) {
            //Alert::error('Error:', $e->getMessage());
            return redirect()->back()->with(['error'=> $e->getMessage()]);
        }

        return redirect()->back()->with(['mensaje' => 'Correo enviado para restablecer la contraseña']);
    }

    //busca un en las tablas clientes, administradores y gerentes y filtra los resultados
    //que coinciden los criterios de búsqueda
    public function buscarUsuario(Request $request)
    {
        if ($request->ajax()) {
            $html = '';
            $query = $request->get('query');

            if ($query != '') {
                $usuarios = Usuario::select()->where('cedula', 'LIKE', '%' . $query . '%')
                    ->orWhere('nombre', 'LIKE', '%' . $query . '%')
                    ->get();
            } else {
                $usuarios = Usuario::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $num_rows = $usuarios->count();
        if ($num_rows > 0) {
            foreach ($usuarios as $usuario) {
                $html .= '
                <tr>
                <td class="text-center">
                       <button type="button" data-toggle="modal" data-target="#modalmodificar' . $usuario->id . '">
                            <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                        </button>
                    </td>
                    <td class="text-center">' . $usuario->cedula . '</td>
                    <td class="text-center">' . $usuario->nombre . '</td>
                    <td class="text-center">' . $usuario->telefono . '</td>
                    <td class="text-center">' . $usuario->correo . '</td>
                    <td class="text-center">' . $usuario->rol . '</td>
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

    public function validarDatosUpdate($cedula, $nombre, $telefono, $correo, $usuario)
    {
        $caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '\"', '<', '>', ',', '.', '?', '/'];

        if (Str::contains($nombre, $caracteresEspeciales)){
            throw new Exception('El nombre no debe tener caracteres especiales');
        }
        if (trim($cedula) == '' && trim($nombre) == '' && trim($telefono) == '' && trim($correo) == '') {
            throw new Exception('Debes diligenciar todos los campos');
        }
        if (trim($nombre) == '') {
            throw new Exception('Ingrese su nombre completo');
        }
        if (trim($telefono) == '') {
            throw new Exception('Ingrese su número de teléfono');
        }
        if (!is_numeric($telefono)) {
            throw new Exception("El teléfono debe ser un valor numérico");
        }
        if (strlen($telefono) < 7 || strlen($telefono) > 10) {
            throw new Exception('El número de teléfono debe tener entre 7 y 10 digitos positivos');
        }
        if (trim($correo) == '') {
            throw new Exception('Debes ingresar el correo electrónico');
        }
        if (trim($cedula) == '') {
            throw new Exception('Ingrese el número de cédula');
        }
        if ($cedula < 1000000 || $cedula > 9999999999) {
            throw new Exception('El número de cédula debe tener entre 7 y 10 dígitos positivos');
        }
        if (!is_numeric($cedula)) {
            throw new Exception('La cédula debe ser un valor numérico');
        }
        if ($cedula != $usuario->cedula) {
            if (Usuario::where('cedula', $cedula)->first()) {
                throw new Exception('La cédula ingresada ya pertenece a un usuario');
            }
        }
        if ($telefono != $usuario->telefono) {
            if (Usuario::where('telefono', $telefono)->first()) {
                throw new Exception('El teléfono ingresado ya pertenece a un usuario');
            }
        }
        if ($correo != $usuario->correo) {
            if (Usuario::where('correo', $correo)->first()) {
                throw new Exception('El correo ingresado ya pertenece a un usuario');
            }
        }
    }
}
