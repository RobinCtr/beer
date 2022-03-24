@extends('layouts.dashboard.index')
@section('contenido')
<!-- TABLA DE PRODUCTOS -->
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h4>PRODUCTOS</h4>
                    <div class="btn btn-outline-primary" data-toggle="modal" data-target="#agregarProducto">Agregar Producto</div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> NOMBRE </th>
                                <th> COSTO </th>
                                <th> TAMAÑO </th>
                                <th> EXISTENCIA</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                            <tr>

                                <td>
                                    <span class="pl-2">{{ $producto->id}}</span>
                                </td>
                                <td> {{ $producto->marca}} </td>
                                <td> $ {{ $producto->precio}} </td>
                                <td> {{ $producto->tamaño}} ml</td>
                                <td> {{ $producto->cantidad}} pz</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#editar{{$producto->id}}"><i class="icon-sm mdi mdi-lead-pencil"></i></button>
                                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#eliminar{{$producto->id}}"><i class="icon-sm mdi mdi-delete-forever"></i></button>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TABLA USUARIOS -->
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between">
                    <h4>USUARIOS</h4>
                    <div class="btn btn-outline-primary" data-toggle="modal" data-target="#agregarUsuario">Agregar Usuario</div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> NOMBRE COMPLETO </th>
                                <th> TELEFONO </th>
                                <th> CORREO </th>
                                <th> ESTATUS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>

                                <td>
                                    <span class="pl-2">{{ $usuario->id}}</span>
                                </td>
                                <td> {{ $usuario->nombreCompleto}} </td>
                                <td> {{ $usuario->telefono}} </td>
                                <td> {{ $usuario->correo}} </td>
                                <td> {{ $usuario->estatus}}</td>
                                <td>
                                <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#editarUsuario{{$usuario->id}}"><i class="icon-sm mdi mdi-lead-pencil"></i></button>
                                        <button class="btn btn-outline-info" data-toggle="modal" data-target="#detalleUsuario{{$usuario->id}}"><i class="icon-sm mdi mdi-information"></i></button>
                                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#eliminarUsuario{{$usuario->id}}"><i class="icon-sm mdi mdi-delete-forever"></i></button>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -------- MODALES DE CRUD --------  -->
@include('admin.modalesProductos')
@include('admin.modalesUsuarios')

@endsection

