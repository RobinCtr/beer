<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Productos;
use App\Models\Usuarios;
use App\Models\Proveedores;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $productos = Productos::all();
        $data = [
            'date' => date('m/d/Y'),
            'productos' => $productos,
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('misProductos.pdf');
        
    }
    public function generateUsuariosPDF()
    {
        $usuarios = Usuarios::all();
        $data = [
            'date' => date('m/d/Y'),
            'usuarios' => $usuarios,
        ];
          
        $pdf = PDF::loadView('usuPDF', $data);
    
        return $pdf->download('Usuarios.pdf');
        
    }
    public function generateProveedoresPDF()
    {
        $proveedores = Proveedores::all();
        $data = [
            'date' => date('m/d/Y'),
            'proveedores' => $proveedores,
        ];
          
        $pdf = PDF::loadView('proveedoresPDF', $data);
    
        return $pdf->download('Proveedores.pdf');
        
    }
}
