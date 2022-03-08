@extends('layouts.dashboard.index')
@section('contenido')
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h4>VENTAS</h4>
                    <div class="d-flex justify-content-between">

                        <form action="{{route('admin.carrito.agregar')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input id="codigo" autocomplete="off" required autofocus name="codigo" type="text" class="form-control" placeholder="Código de barras">
                            </div>
                        </form>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label id="" class="d-flex pr-3">Total: $ {{$total}}</label>
                        <div class="d-flex pr-2"><a href="{{route('admin.carrito.cancelar')}}">
                                <button class="btn btn-success"> <i class="mdi mdi-check"></i></button>
                            </a></div>
                        <div class="d-flex pr-2"><a href="{{route('admin.carrito.cancelar')}}">
                                <button class="btn btn-danger"> <i class="mdi mdi-delete-forever"></i></button>
                            </a></div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> PRODUCTO </th>
                                <th> PRECIO </th>
                                <th> CANTIDAD</th>
                                <th> COSTO</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito as $car)
                            @foreach($productos as $producto)
                            @if($car->codigo == $producto->id)
                            <tr>
                                <td> <label>{{$producto->id}}</label></td>
                                <td> <label>{{$producto->marca}} {{$producto->tamaño}} ml</label></td>
                                <td> <label>$ {{$producto->precio}} </label></td>
                                <td> <label>{{$car->cantidad}}</label></td>
                                <td> <label>$ {{$car->costo}}</label></td>
                                <td><a href="{{route('admin.carrito.eliminar',['id'=> $car->id])}}">
                                        <div class="">
                                            <button class="btn btn-outline-danger"> <i class="mdi mdi-delete-forever"></i></button>
                                        </div>
                                    </a></td>
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('js')
<script>
    const $codigo = document.querySelector("#codigo");
    const patron = /[0-9/]+/;
    $codigo.addEventListener("keydown", event => {
        if (patron.test(event.key)) {
            document.getElementById('codigo').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 13) {} else {
                event.preventDefault();
            }
        }
    });
</script>
@endsection