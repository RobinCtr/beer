<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistas extends Controller
{
    public function admin(){
        return view('admin');
    }
}
