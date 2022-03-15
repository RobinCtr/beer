<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
class UsuariosController extends Controller
{
    public function altaUsuario(Request $request){
        $file = $request->file('img');
        $img=$file->getClientOriginalName();
    
        $ldate = date('Ymd_His_');   
        $img2= $ldate . $img; 
        \Storage::disk('local')->put($img2, \File::get($file)); 
   
        //--------------------------------------------
        $usu = Usuarios::create(array(
          'nombreCompleto'=>$request->input('nombreCompleto'),
          'telefono'=>$request->input('telefono'), 
          'correo'=>$request->input('correo'), 
          'password'=>$request->input('password'), 
          'estatus'=>$request->input('estatus'), 
          //'id_tipo'=>$request->input('id_tipo'), 
          'img' =>$img2,
           ));
         return redirect()->route('admin');
    }
    public function salvarUsuario(Usuarios $id, Request $request){
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
        $query = Usuarios::find($id->id);
          $query->nombreCompleto = $request->nombreCompleto;
          $query->telefono = $request->telefono;
          $query->correo = $request->correo;
          $query->password = $request->password;
          $query->estatus = $request->estatus;
          $query->id_tipo = $request->id_tipo;
          $query->img = $img2;
        $query -> save();
        return redirect()->route('admin');
  }
    public function eliminarUsuario(Usuarios $id){
      $id->delete();
      return redirect()->route('admin');
    }
}
