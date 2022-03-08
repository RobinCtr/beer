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
    public function salvarProducto(Productos $id, Request $request){
      if($request->file('img') != ''){
          $file = $request->file('img');
          $img=$file->getClientOriginalName();
        
         $ldate = date('Ymd_His_');  
         $img2= $ldate . $img; 
         \Storage::disk('local')->put($img2, \File::get($file));
         }
         else{
           $img2 = $request->img2;
        }
        //--------------------------------
        $query = Productos::find($id->id);
          $query->id_tipo = $request->id_tipo;
          $query->marca = $request->marca;
          $query->tamaño = $request->tamaño;
          $query->precio = $request->precio;
          $query->cantidad = $request->cantidad;
          $query->img = $img2;
        $query -> save();
        return redirect()->route('admin');
  }
    public function eliminarProducto(Productos $id){
      $id->delete();
      return redirect()->route('admin');
    }
    public function agregarCarrito(Request $request){
     
      //--------------------------------------------
      $pro = Productos::create(array(
        'codigo' =>$request->input('id_tipo'),
        'cantidad'=>$request->input('1'), 
        
         ));
       return redirect()->route('admin');
  }
  }
