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

Route::name('admin.productos.alta')->post('admin/',[ProductosController::class,'altaProductos']);
