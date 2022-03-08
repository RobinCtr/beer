@extends('layouts.dashboard.index')
@section('contenido')
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h4>VENTAS</h4>
                    <div class="d-flex justify-content-center">
                        <label id="" class="d-flex pr-3">Codigo</label>
                        <form method="post" action="{{route('admin.carrito.agregar')}}">
                            <input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
                        </form>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> PRODUCTO </th>
                                <th> CANTIDAD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito as $car)
                            @foreach($productos as $producto)
                            @if($car->codigo = $producto->id)
                            <tr>
                                <td> <label>{{$producto->id}}</label></td>
                                <td> <label>{{$producto->marca}} {{$producto->tamaño}} ml</label></td>
                                <td> <label>{{$car->cantidad}}</label></td>
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
            if (event.keyCode == 8) {} else {
                event.preventDefault();
            }
        }
    });
    $codigo.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            myfield.form.submit();
            event.preventDefault();
        }
    });
</script>
@endsection