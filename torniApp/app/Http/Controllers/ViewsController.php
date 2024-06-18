<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Factura;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Servicio;
use Illuminate\Support\Facades\Session;

session_start();


class ViewsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }

        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }

        if (session('rol') == 'ADMINISTRADOR') {

            return view('homeAdmin');
        }
        return view('home');
    }

    public function agendamiento()
    {
        return view('agendamiento');
    }

    public function mostrarModal()
    {
        return View('modales.modal');
    }

    public function compras()
    {
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {

            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }
        if (!isset($_SESSION['detallesCompra'])) {
            $_SESSION['detallesCompra'] = array();
        }
        if (!session()->has('costoTotalCompra')) {
            session(['costoTotalCompra']);
        }
        //session()->flush();
        //session_destroy();
        return view('compras');
    }

    public function recuperarContrasenia()
    {
        return view('recuperarContrasenia');
    }

    public function acercainfo()
    {
        return view('acercainfo');
    }

    public function nuevoPassword()
    {
        return view('formCambiarContrasenia');
    }

    public function facturacion()
    {
        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (!isset($_SESSION['detallesFactura'])) {
            $_SESSION['detallesFactura'] = array();
        }
        session(['ivaFactura']);
        session(['totalFactura']);
        session(['cedulaCliente'], 1212);
        session(['nombreCliente'], 'Indefinido');
        session(['idFactura']);
        session(['fechaFactura']);
        session(['idFactura']);
        session(['cedulacliente', 12124]);
        session(['nombrecliente', 12124]);
        //session()->flush();
        //session_destroy();
        //$cliente = Cliente::where('cedula', 1006281920)->first();
        //session()->flush();
        return view('facturacion');
    }

    public function citas()
    {
        if (!Session::has('idActor')) {
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }

        $citas = Cita::all();
        return view('citas', compact('citas'));
    }

    public function inventario()
    {
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }
        $productos = Producto::all();
        return view('inventario', compact('productos'));
    }

    public function facturas()
    {
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }
        $facturas = Factura::select()->orderBy('id', 'desc')->get();
        return view('facturas', compact('facturas'));
    }

    public function servicios()
    {
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }
        $servicios = Servicio::all();
        return view('servicios', compact('servicios'));
    }

    public function proveedores()
    {
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }
        $proveedores = Proveedor::all();
        $proveedoresActivo = $proveedores->filter(
            function ($proveedor) {
                return $proveedor->activo;
            }
        );
        return view('proveedores', compact('proveedoresActivo'));
    }

    public function reportes()
    {
        if (!Session::has('idActor')) {
            //Alert::error('Debes estar loguedo para acceder a esta página');
            return redirect()->route('interfaz.login')->with(['error' => 'Debes estar loguedo para acceder a esta página']);
        }
        if (session('rol') == 'TECNICO') {
            $citas = Cita::get();
            return redirect()->route('citasT', compact('citas'));
        }
        if (session('rol') == 'ADMINISTRADOR') {
            return redirect()->route('home')->with(['error' => 'Para ingresar a la interfaz de reportes debes tener permisos']);
        }
        return view('reportes');
    }

    public function citasT()
    {
        $citas = Cita::get();
        return view('citasT', compact('citas'));
    }

    public function logOut()
    {
        session()->flush();
        session_destroy();
        return view('index');
    }
}
