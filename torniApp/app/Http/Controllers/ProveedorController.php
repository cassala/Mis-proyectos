<?php
namespace App\Http\Controllers;

use App\Models\Proveedor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProveedorController extends Controller
{
    //funcion que valida los datos ingresados del proveedor
    public function validarDatos($nombre, $telefono, $correo, $marca)
    {
        $caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', '\'', '\"', '<', '>', ',', '.', '?', '/'];

        if (Str::contains($nombre, $caracteresEspeciales)){
            throw new Exception('El nombre no debe tener caracteres especiales');
        }
        if (trim($nombre) == '') {
            throw new Exception('Ingrese el nombre del proveedor');
        }
        if (trim($telefono) == '') {
            throw new Exception('Ingrese el numero de telefono del proveedor');
        }
        if (!is_numeric($telefono)) {
            throw new Exception("Número de telefono incorrecto. \n Ingresa solo valores numéricos");
        }
        if (strlen($telefono) < 7 || strlen($telefono) > 10) {
            throw new Exception('El numero de telefono ingresado no es válido');
        }
        if (trim($correo) == '') {
            throw new Exception('Debes ingresar el correo electrónico');
        }
        if (trim($marca) == '') {
            throw new Exception('Ingrese la marca distribuida');
        }
    }

    public function store(Request $request)
    {
        try {

            $proveedor = new Proveedor();
            $nombre = $request->input('nombre');
            $telefono = $request->input('telefono');
            $correo = $request->input('correo');
            $marca = $request->input('marcaDistribuida');
            $this->validarDatos($nombre, $telefono, $correo, $marca);
            if(Proveedor::where('correo', $correo)->first()){
                throw new Exception('El proveedor ya se encuentra registrado');
            }

            if(Proveedor::where('telefono', $telefono)->first()){
                throw new Exception('El proveedor ya se encuentra registrado');
            }

            if (Proveedor::where('marcaDistribuida', $marca)->first()) {
                throw new Exception('Ya existe un proveedor con marca: '.$marca);
            }

            $proveedor->nombre = strtoupper(trim($nombre));
            $proveedor->telefono = trim($telefono);
            $proveedor->correo = trim($correo);
            $proveedor->marcaDistribuida = trim($marca);
            $proveedor->activo = true;
                
            $result = $proveedor->save();

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
            
        }
        return redirect()->back()->with(['mensaje' => 'Proveedor registrado']);
    }

    public function showAll()
    {
        return Proveedor::all();
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        try {
            $nombre = $request->input('nombre');
            $telefono = $request->input('telefono');
            $correo = $request->input('correo');
            $marca = $request->input('marcaDistribuida');
            $this->validarDatos($nombre, $telefono, $correo, $marca);

            if ($marca != $proveedor->marcaDistribuida) {
                if (Proveedor::where('marcaDistribuida', $marca)->first()) {
                    throw new Exception('Ya existe un proveedor con marca: '.$marca);
                }
            }
            if ($telefono != $proveedor->telefono) {
                if (Proveedor::where('telefono', $telefono)->first()) {
                    throw new Exception('El teléfono ingresado ya pertenece a un proveedor');
                }
            }
            if ($correo != $proveedor->correo) {
                if (Proveedor::where('correo', $correo)->first()) {
                    throw new Exception('El correo ingresado ya pertenece a un proveedor');
                }
            }

            $proveedor->nombre = strtoupper(trim($nombre));
            $proveedor->telefono = trim($telefono);
            $proveedor->correo = trim($correo);
            $proveedor->marcaDistribuida = trim($marca);

            $proveedor->update();            
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

        return redirect()->back()->with(['mensaje' => 'Proveedor actualizado']);
    }

    public function eliminar(Proveedor $proveedor){

        try{
        $proveedor->activo = false;
        $proveedor->update();

        }catch(Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return redirect()->back()->with(['mensaje' => 'Proveedor eliminado']);
    }

    public function filtrarProveedor(Request $request)
    {

        if ($request->ajax()) {
            $html = '';
            $query = $request->get('query');

            if ($query != '') {
                $proveedores = Proveedor::select()->where('marcaDistribuida', 'LIKE', '%' . $query . '%')
                    ->orWhere('correo', 'LIKE', '%' . $query . '%')
                    ->get();
            } else {
                $proveedores = Proveedor::select()
                    ->orderBy('id', 'DESC')
                    ->get();
            }
        }

        $proveedoractivos = $proveedores->filter(function($proveedor){
            return $proveedor->activo;
        });

        $num_rows = $proveedoractivos->count();
        if ($num_rows > 0) {

            /*foreach ($proveedoractivos as $proveedor) {
                $html .= '
                <tr>
                    <td class="text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="button" style="background: none;" data-toggle="modal" data-target="#modalmodificar'. $proveedor->id . '">
                            <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                        </button>
                        <form style="width: 1.5em;" action="{{route("proveedor.eliminar", ' . $proveedor->id . ')}}" method="post" id="formEliminar">
                            "@csrf"
                            "@method("DELETE")" 
                            <button type="submit" style="background: none;" id="btnEliminar">
                                <img style="width: 1.5em; height: 1.5em; margin-top: 15%;" src="../css/fonts/material-symbols--delete-rounded.png" >
                            </button>
                        </form>
                    </div>
                    </td>
                    <td class="text-center">' . $proveedor->nombre . '</td>
                    <td class="text-center">' . $proveedor->telefono . '</td>
                    <td class="text-center">' . $proveedor->correo . '</td>
                    <td class="text-center">' . $proveedor->marcaDistribuida . '</td>
                <tr>
                ';
            }*/
            foreach ($proveedoractivos as $proveedor) {
                $html .= '
                <tr>
                    <td class="text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="button" style="background: none;" data-bs-toggle="modal" data-bs-target="#modalmodificar'. $proveedor->id . '">
                            <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                        </button>               
                        <button type="button" style="background: none;" id="btnEliminar" data-bs-toggle="modal" data-bs-target="#modaleliminar'. $proveedor->id . '">
                            <img style="width: 1.5em; height: 1.5em; margin-top: 15%;" src="../css/fonts/material-symbols--delete-rounded.png" >
                        </button>
                    </div>
                    </td>
                    <td class="text-center">' . $proveedor->nombre . '</td>
                    <td class="text-center">' . $proveedor->telefono . '</td>
                    <td class="text-center">' . $proveedor->correo . '</td>
                    <td class="text-center">' . $proveedor->marcaDistribuida . '</td>
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
}
