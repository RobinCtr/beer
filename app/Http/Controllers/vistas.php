<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Productos;
use App\Models\TiposBebidas;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class vistas extends Controller
{
    public function admin()
    {
        $productos = Productos::all();
        $bebidas = TiposBebidas::all();
        $usuarios = Usuarios::all();

        return view('admin')
            ->with(['usuarios' => $usuarios])
            ->with(['productos' => $productos])
            ->with(['bebidas' => $bebidas]);
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
