<?php

namespace App\Http\Controllers;

Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\TiposBebidas;

class ProductosController extends Controller
{
    public function altaProductos(Request $request){
        $file = $request->file('img');
        $img=$file->getClientOriginalName();
    
        $ldate = date('Ymd_His_');   
        $img2= $ldate . $img; 
        \Storage::disk('local')->put($img2, \File::get($file)); 
   
        //--------------------------------------------
        $pro = Productos::create(array(
          'id_tipo' =>$request->input('id_tipo'),
          'marca'=>$request->input('marca'), 
          'tamaño'=>$request->input('tamaño'), 
          'precio'=>$request->input('precio'), 
          'cantidad'=>$request->input('cantidad'), 
          'img' =>$img2,
           ));
         return redirect()->route('admin');
    }
    
  }
