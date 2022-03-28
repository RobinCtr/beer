<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\vistas;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('inicio')->get('/', [vistas::class, 'inicio']);


Route::name('aviso')->get('aviso/', [vistas::class, 'aviso']);

Route::name('login')->get('login/', [vistas::class, 'login']);
Route::name('login_post')->post('login_post/', [Auth::class, 'login_post']);

Route::name('register')->get('register/', [vistas::class, 'register']);
Route::name('register_post')->post('register_post/', [Auth::class, 'register_post']);


Route::name('admin')->get('admin/', [vistas::class, 'admin']);

Route::name('ventas')->get('ventas/', [vistas::class, 'puntoVenta']);

Route::post('contact',[MessageController::class,'store'])->name('messages.store');


Route::name('admin.productos.alta')->post('admin/', [ProductosController::class, 'altaProductos']);
Route::name('admin.productos.salvar')->put('admin.productos.salvar/{id}', [ProductosController::class, 'salvarProducto']);
Route::name('admin.productos.eliminar')->get('admin.productos.eliminar/{id}', [ProductosController::class, 'eliminarProducto']);

Route::name('admin.usuarios.alta')->post('admin.usuarios.alta', [UsuariosController::class, 'altaUsuario']);
Route::name('admin.usuarios.editar')->put('admin.usuarios.editar/{id}', [UsuariosController::class, 'salvarUsuario']);
Route::name('admin.usuarios.eliminar')->get('admin.usuarios.eliminar/{id}', [UsuariosController::class, 'eliminarUsuario']);

Route::name('admin.proveedores.alta')->post('admin.proveedores.alta', [ProveedoresController::class, 'altaProveedores']);
Route::name('admin.proveedores.editar')->put('admin.proveedores.editar/{id}', [ProveedoresController::class, 'salvarProveedores']);
Route::name('admin.proveedores.eliminar')->get('admin.proveedores.eliminar/{id}', [ProveedoresController::class, 'borrarProveedor']);


Route::name('admin.carrito.agregar')->post('admin.carrito.agregar', [ProductosController::class, 'agregarCarrito']);
Route::name('admin.carrito.cancelar')->get('admin.carrito.cancelar', [ProductosController::class, 'cancelarCarrito']);
Route::name('admin.carrito.eliminar')->get('admin.carrito.eliminar/{id}', [ProductosController::class, 'eliminarCarrito']);
