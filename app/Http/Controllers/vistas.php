<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Productos;
use App\Models\TiposBebidas;
use App\Models\Usuarios;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class vistas extends Controller
{
    public function inicio (){
        return view('welcome');
    }
    public function login (){
        return view('login');
    }
    public function register (){
        if(Auth::check()){
            Auth::logout();
        }
        return view('register');
    }
    public function aviso (){
        return view('avisoPrivacidad');
    }
    public function avisoAceptar (Request $request){
        $cookie = Cookie::make('aviso', '1', 1);
       
        return redirect()->route('inicio')
        ->withCookie($cookie);
    }
    public function admin()
    {
        $productos = Productos::all();
        $bebidas = TiposBebidas::all();
        $usuarios = Usuarios::all();
        $proveedores = Proveedores::all();
        return view('admin')
            ->with(['usuarios' => $usuarios])
            ->with(['productos' => $productos])
            ->with(['bebidas' => $bebidas])
            ->with(['proveedores' => $proveedores]);
    }
    public function puntoVenta()
    {
        $productos = Productos::all();
        $bebidas = TiposBebidas::all();
        $carrito = Carrito::all();
        $total = Carrito::all()->sum('costo');
        return view('admin.puntoVenta.index')
            ->with(['total' => $total])
            ->with(['productos' => $productos])
            ->with(['carrito' => $carrito])
            ->with(['bebidas' => $bebidas]);
    }
}
