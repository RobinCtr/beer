<?php

use App\Http\Controllers\vistas;
use App\Http\Controllers\ProductosController;
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

Route::name('inicio')->get('/', function () {
    return view('welcome');
});

Route::name('admin')->get('admin/',[vistas::class,'admin']);
Route::name('ventas')->get('ventas/',[vistas::class,'puntoVenta']);


Route::name('admin.productos.alta')->post('admin/',[ProductosController::class,'altaProductos']);
Route::name('admin.productos.salvar')->put('admin.productos.salvar/{id}',[ProductosController::class,'salvarProducto']);
Route::name('admin.productos.eliminar')->get('admin.productos.eliminar/{id}',[ProductosController::class,'eliminarProducto']);

Route::name('admin.carrito.agregar')->post('admin.carrito.agregar',[ProductosController::class,'agregarCarrito']);
Route::name('admin.carrito.cancelar')->get('admin.carrito.cancelar',[ProductosController::class,'cancelarCarrito']);
Route::name('admin.carrito.eliminar')->get('admin.carrito.eliminar/{id}',[ProductosController::class,'eliminarCarrito']);
