<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DetalleCompraController;
use App\Http\Controllers\DetalleFacturacionController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\AgendamientoController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [ViewsController::class, 'index'])->name('principal');
Route::get('/login', [ViewsController::class, 'login'])->name('interfaz.login');
Route::get('/home', [ViewsController::class, 'home'])->name('home');
//Route::get('/homeAdmin', [ViewsController::class, 'homeAdmin'])->name('homeAdmin');
Route::get('/facturacion', [ViewsController::class, 'facturacion'])->name('facturacion');
Route::get('/agendamiento', [ViewsController::class, 'agendamiento'])->name('agendamiento');
//Route::post('/agendamiento', [ViewsController::class, 'agendamiento'])->name('agendamiento');
Route::get('/compras', [ViewsController::class, 'compras'])->name('compras');
Route::get('/acercainfo', [ViewsController::class, 'acercainfo'])->name('acercainfo');
Route::get('/citas', [ViewsController::class, 'citas'])->name('citas');
Route::post('/citas', [ViewsController::class, 'citas'])->name('citas');
Route::patch('/citas/gestionar/{cita}', [AgendamientoController::class, 'gestionarCita'])->name('cita.gestionarCita');
Route::get('/citasT', [ViewsController::class, 'citasT'])->name('citasT');
Route::post('/citasT', [ViewsController::class, 'citasT'])->name('citasT');
Route::get('/servicios', [ViewsController::class, 'servicios'])->name('servicios');
Route::get('/inventario', [ViewsController::class, 'inventario'])->name('inventario');
Route::get('/usuarios', [UsuarioController::class, 'usuarios'])->name('usuarios');
Route::get('/facturas', [ViewsController::class, 'facturas'])->name('facturas');
Route::get('/proveedores', [ViewsController::class, 'proveedores'])->name('proveedores');
//Route::get('/compras/buscar', [DetalleCompraController::class, 'buscarProducto'])->name('compra.buscarProducto');
Route::get('/reportes', [ViewsController::class, 'reportes'])->name('reportes');
Route::post('/reportes', [ReporteController::class, 'generarReporte'])->name('reportes.show');
Route::get('/logOut', [ViewsController::class, 'logOut'])->name('logOut');
Route::get('/recuperarContrasenia', [ViewsController::class, 'recuperarContrasenia'])->name('recuperarContrasenia');
Route::post('/recuperarContrasenia', [UsuarioController::class, 'enviarCorreo'])->name('recuperarContraseña.enviarCorreo');
//Route::post('/compras/eliminar/{indice}', [DetalleCompraController::class, 'eliminarDetalle'])->name('compra.eliminarDetalle');
Route::get('/recuperarContrasenia/dykda5ly3hukh7jll9ug8hgjhk', [ViewsController::class, 'nuevoPassword'])->name('nuevoPassword');
Route::patch("/recuperarContrasenia/", [UsuarioController::class, 'actualizarPassword'])->name('actualizarPassword');
Route::get('/mostrar-modal', [ViewsController::class, 'mostrarModal'])->name('modal');

Route::post('/provedores', [ProveedorController::class, 'store'])->name('proveedor.store');
Route::post('/agendamiento', [AgendamientoController::class, 'storeagendamiento'])->name('agendamiento.storeagendamiento');
Route::get('/provedores/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedor.edit');
Route::patch('/proveedores/{proveedor}', [ProveedorController::class, 'update'])->name('proveedor.update');
Route::delete('/proveedores/eliminar/{proveedor}', [ProveedorController::class, 'eliminar'])->name('proveedor.eliminar');
Route::get('/inventarios/buscar', [ProductoController::class, 'filtrarProducto'])->name('producto.filtarProducto');
Route::get('/proveedores/buscar', [ProveedorController::class, 'filtrarProveedor'])->name('proveedor.filtarProveedor');

Route::get('/clientes/buscar', [ClienteController::class, 'buscarCliente'])->name('cliente.buscar');
Route::get('/clientes', [ClienteController::class, 'clientes'])->name('clientes');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::patch('/clientes/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');

Route::get('/productos', [ProductoController::class, 'index'])->name('producto.index');
Route::post('/productos', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::patch('/productos/{producto}', [ProductoController::class, 'update'])->name('producto.update');

Route::get('/usuarios/buscar', [UsuarioController::class, 'buscarUsuario'])->name('usuario.buscarUsuario');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuario.store');
Route::patch('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::patch('/usuarios/', [UsuarioController::class, 'actualizarPassword'])->name('usuario.actualizarPassword');
Route::post('/prehome', [UsuarioController::class, 'iniciarSesion'])->name('usuario.iniciarSesion');


Route::post('/compras/add', [DetalleCompraController::class, 'agregarDetalleCompra'])->name('compra.agregarDetalleCompra');
Route::post('/compras/save', [CompraController::class, 'store'])->name('compra.store');
Route::get('/compras/buscar', [DetalleCompraController::class, 'buscarProducto'])->name('compra.buscarProducto');
Route::post('/compras/eliminar/{indice}', [DetalleCompraController::class, 'eliminarDetalle'])->name('compra.eliminarDetalle');

Route::post('/servicios/save', [ServicioController::class, 'store'])->name('servicio.store');
Route::get('/servicios/buscar', [ServicioController::class, 'buscarServicio'])->name('servicio.buscarServicio');
Route::patch('/servicios/update/{servicio}', [ServicioController::class, 'update'])->name('servicio.update');

Route::post('/facturacion/add', [DetalleFacturacionController::class, 'agregarDetalleFactura'])->name('factura.agregarDetalleFactura');
Route::get('/facturacion/buscarCliente', [FacturacionController::class, 'buscarCliente'])->name('factura.buscarCliente');
Route::get('/facturacion/calcularCambio', [FacturacionController::class, 'calcularCambio'])->name('factura.calcularCambio');
Route::post('/facturacion/eliminar/{indice}', [DetalleFacturacionController::class, 'eliminarDetalle'])->name('factura.eliminarDetalle');
Route::get('/facturacion/buscarProducto', [DetalleFacturacionController::class, 'buscarProducto'])->name('factura.buscarProducto');
Route::post('/facturacion/previsualizar', [FacturacionController::class, 'cargarDatosFactura'])->name('factura.cargarDatosFactura');
Route::post('/facturacion/save', [FacturacionController::class, 'store'])->name('factura.store');
Route::get('/facturacion/buscarFacturaPorId', [FacturacionController::class, 'buscarFacturasPorId'])->name('factura.buscarFacturasPorId');
Route::get('/facturacion/buscarFacturaPorFecha', [FacturacionController::class, 'buscarFacturasPorFecha'])->name('factura.buscarFacturasPorFecha');

Route::get('/productos/filtrar', [ProductoController::class, 'filtrarProducto'])->name('producto.filtrarProducto');






