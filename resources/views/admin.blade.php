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
                                <td> {{ $producto->nombre}} </td>
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
                <form action="{{route('admin.productos.alta')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_tipo">Tipo de Bebida</label>
                            <select class="custom-select mr-sm-2" id="id_tipo" name="id_tipo">
                                <option selected value="0">Elegir</option>
                                @foreach($bebidas as $bebida)
                                <option value="{{$bebida->id}}">{{$bebida->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Marca">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca de la bebida">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tamaño">Tamaño de la bebida en ml</label>
                            <input type="text" class="form-control" name="tamaño" id="tamaño" placeholder="Tamaño de la bebida en ml">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="precio">Precio $</label>
                            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio de la bebida">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cantidad">Cantidad de stock</label>
                            <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad de stock">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="img">Imagen de la Bebida</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img" name="img">
                                <label class="custom-file-label" for="customFile">Elegir Imagen</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-info">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal EDITAR PRODUCTO-->
@foreach($productos as $producto)
<div class="modal fade"  id="editar{{$producto->id}}" tabindex="-1" aria-labelledby="editarProductoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProductoModal">EDITAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.productos.alta')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_tipo">Tipo de Bebida</label>
                            <select class="custom-select mr-sm-2" id="id_tipo" name="id_tipo">
                                @foreach($bebidas as $bebida)
                                <option @if($bebida->id = $producto->id_tipo) selected @endif value="{{$bebida->id}}">{{$bebida->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Marca">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca de la bebida" value="{{$producto->marca}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tamaño">Tamaño de la bebida en ml</label>
                            <input type="text" class="form-control" name="tamaño" id="tamaño" placeholder="Tamaño de la bebida en ml" value="{{$producto->tamaño}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="precio">Precio $</label>
                            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio de la bebida" value="{{$producto->precio}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cantidad">Cantidad de stock</label>
                            <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad de stock" value="{{$producto->cantidad}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="img">Imagen de la Bebida</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img" name="img">
                                <input type="hidden" class="custom-file-input" id="img1" name="img2" value="{{$producto->img}}">
                                <label class="custom-file-label" for="customFile">Elegir Imagen</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-info">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach

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

<!-- Modal EDITAR USUARIO-->
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
