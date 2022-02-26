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
                                <td> {{ $producto->name}} </td>
                                <td> {{ $producto->costo}} </td>
                                <td> {{ $producto->tamaño}} {{ $producto->um}}</td>
                                <td> {{ $producto->existencia}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#editarProducto"><i class="icon-sm mdi mdi-lead-pencil"></i></button>
                                        <button class="btn btn-outline-danger"><i class="icon-sm mdi mdi-delete-forever"></i></button>
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
                                <td> {{ $producto->name}} </td>
                                <td> {{ $producto->costo}} </td>
                                <td> {{ $producto->tamaño}} {{ $producto->um}}</td>
                                <td> {{ $producto->existencia}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#editarUsuario"><i class="icon-sm mdi mdi-lead-pencil"></i></button>
                                        <button class="btn btn-outline-danger"><i class="icon-sm mdi mdi-delete-forever"></i></button>
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

<!-- Modal AGREGAR PRODUCTO-->
<div class="modal fade" id="agregarProducto" tabindex="-1" aria-labelledby="agregarProductoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarProductoModal">AGREGAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal EDITAR PRODUCTO-->
<div class="modal fade" id="editarProducto" tabindex="-1" aria-labelledby="editarProductoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProductoModal">EDITAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal AGREGAR USUARIO-->
<div class="modal fade" id="agregarUsuario" tabindex="-1" aria-labelledby="agregarUsuarioModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarUsuarioModal">AGREGAR USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal EDITAR PRODUCTO-->
<div class="modal fade" id="editarUsuario" tabindex="-1" aria-labelledby="editarUsuarioModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarUsuarioModal">EDITAR USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection