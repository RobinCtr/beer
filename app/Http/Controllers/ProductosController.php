<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\TiposBebidas;

class ProductosController extends Controller
{
  public function altaProductos(Request $request)
  {
    $file = $request->file('img');
    $img = $file->getClientOriginalName();

    $ldate = date('Ymd_His_');
    $img2 = $ldate . $img;
    \Storage::disk('local')->put($img2, \File::get($file));

    //--------------------------------------------
    $pro = Productos::create(array(
      'id_tipo' => $request->input('id_tipo'),
      'marca' => $request->input('marca'),
      'tamaño' => $request->input('tamaño'),
      'precio' => $request->input('precio'),
      'cantidad' => $request->input('cantidad'),
      'img' => $img2,
    ));
    return redirect()->route('admin');
  }
  public function salvarProducto(Productos $id, Request $request)
  {
    if ($request->file('img') != '') {
      $file = $request->file('img');
      $img = $file->getClientOriginalName();

      $ldate = date('Ymd_His_');
      $img2 = $ldate . $img;
      \Storage::disk('local')->put($img2, \File::get($file));
    } else {
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
    $query->save();
    return redirect()->route('admin');
  }
  public function eliminarProducto(Productos $id)
  {
    $id->delete();
    return redirect()->route('admin');
  }
  public function agregarCarrito(Request $request)
  {
    $id = $request->input('codigo');
    $producto = Carrito::find($id);
    $productos = Productos::find($id);
    //dd($producto);
    //--------------------------------------------
    if ($productos) {
      if ($producto) {
        $producto->cantidad = $producto->cantidad + 1;
        $producto->costo = $producto->cantidad * $productos->precio;
        $producto->save();
      } else {
        $pro = Carrito::create(array(
          'codigo' => $request->input('codigo'),
          'cantidad' => '1',
          'costo' => $productos->precio

        ));
      }
      return redirect()->route('ventas');
    } else {
      return redirect()->route('ventas')
        ->with([
          "mensaje" => "El producto no existe !!",
          "tipo" => "danger"
        ]);
    }
  }
  public function eliminarCarrito(Carrito $id)
  {
    $id->delete();
    return redirect()->route('ventas');
  }
  public function cancelarCarrito()
  {
    $ventas = Carrito::all();
    foreach($ventas as $venta){
      $id= Carrito::find($venta->id);
      $id->delete();
    }
    return redirect()->route('ventas');
  }
}
