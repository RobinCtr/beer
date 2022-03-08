<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Productos;
use App\Models\TiposBebidas;
use Illuminate\Http\Request;

class vistas extends Controller
{
    public function admin(){
        $productos=Productos::all();
        $bebidas=TiposBebidas::all();
        return view('admin')
            ->with(['productos'=>$productos])
            ->with(['bebidas'=>$bebidas]);
    }
    public function puntoVenta(){
        $productos=Productos::all();
        $bebidas=TiposBebidas::all();
        $carrito=Carrito::all();
        return view('admin.puntoVenta.index')
            ->with(['productos'=>$productos])
            ->with(['carrito'=>$carrito])
            ->with(['bebidas'=>$bebidas]);        
    }
}
