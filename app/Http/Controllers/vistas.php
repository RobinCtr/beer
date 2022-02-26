<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class vistas extends Controller
{
    public function admin(){
        $productos = Productos::all();
        return view('admin')
            ->with(['productos' => $productos]);
    }
}
