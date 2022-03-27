<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;

class ProveedoresController extends Controller
{
    public function altaProveedores(Request $request){
        
        $pro = Proveedores::create(array(
            'nombre'=>$request->input('nombre'),
            'rfc'=>$request->input('rfc'),
            'calle'=>$request->input('calle'),
            'municipio'=>$request->input('municipio'),
            'estado'=>$request->input('estado'),
            'numero'=>$request->input('numero'),
            'telefono'=>$request->input('telefono'),
            'correo'=>$request->input('correo')

           ));
           return redirect()->route('admin');
    }
    public function editarProveedores(Proveedores $id){
        return view("dashboard.proveedores.modificar_proveedores")
        ->with(['proveedor'=>$id]);
      }
      public function borrarProveedor(Proveedores $id){
        $id->delete();
        return redirect()->route('admin.proveedores');
      }
      public function salvarProveedores(Proveedores $id, Request $request){
        
          $query = Proveedores::find($id->id);
            $query->nombre = $request->nombre;
            $query->rfc = $request->rfc;
            $query->calle = $request->calle;
            $query->municipio = $request->municipio;
            $query->estado = $request->estado;
            $query->numero = $request->numero;
            $query->telefono = $request->telefono;
            $query->correo = $request->correo;
          $query -> save();
          return redirect()->route('admin.proveedores');
      }
}
