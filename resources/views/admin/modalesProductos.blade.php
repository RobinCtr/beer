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
                            <input type="text" class="form-control marca" name="marca" id="marca" placeholder="Marca de la bebida">
                            <div id="resultado1"></div><br>
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
                            <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad de stock">
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
<div class="modal fade" id="editar{{$producto->id}}" tabindex="-1" aria-labelledby="editarProductoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProductoModal">EDITAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.productos.salvar',['id'=> $producto->id])}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
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
                            <input type="text" class="form-control" name="marca" id="marcaEditar" placeholder="Marca de la bebida" value="{{$producto->marca}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tamaño">Tamaño de la bebida en ml</label>
                            <input type="text" class="form-control" name="tamaño" id="tamañoEditar" placeholder="Tamaño de la bebida en ml" value="{{$producto->tamaño}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="precio">Precio $</label>
                            <input type="text" class="form-control" name="precio" id="precioEditar" placeholder="Precio de la bebida" value="{{$producto->precio}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cantidad">Cantidad de stock</label>
                            <input type="number" class="form-control" name="cantidad" id="cantidadEditar" placeholder="Cantidad de stock" value="{{$producto->cantidad}}">
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

<!-- Modal ELIMINAR PRODUCTO-->
@foreach($productos as $producto)
<div class="modal fade" id="eliminar{{$producto->id}}" tabindex="-1" aria-labelledby="editarProductoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProductoModal">ELIMINAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">DESEA ELIMINAR EL PRODUCTO {{$producto->marca}} {{$producto->tamaño}} ml</label>

                    </div>

                </div>


                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <a href="{{route('admin.productos.eliminar',['id'=> $producto->id])}}">
                        <div class="">
                            <input type="button" class="btn btn-outline-info" value="ELIMINAR">
                        </div>
                    </a>
                </div>
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

@section('js')


<script>
    const $marca = document.querySelector("#marca");
    const patron = /[a-zA-Z/]+/;

    $marca.addEventListener("keydown", event => {
        if (patron.test(event.key)) {
            document.getElementById('marca').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    const $tamaño = document.querySelector("#tamaño");
    const patronT = /[0-9]+/;

    $tamaño.addEventListener("keydown", event => {
        if (patronT.test(event.key)) {
            document.getElementById('tamaño').style.border = "1px solid #00cc00";
        }  else {
            if (event.keyCode == 8) {} else {
                event.preventDefault();
            }
        }
    });
    const $precio = document.querySelector("#precio");
    const patronP = /[0-9\.]+/;

    $precio.addEventListener("keydown", event => {
        if (patronP.test(event.key)) {
            document.getElementById('precio').style.border = "1px solid #00cc00";
        }  else {
            if (event.keyCode == 8 ) {} else {
                event.preventDefault();
            }
        }
    });
    const $cantidad = document.querySelector("#cantidad");
    const patronC = /[0-9]+/;

    $cantidad.addEventListener("keydown", event => {
        if (patronC.test(event.key)) {
            document.getElementById('cantidad').style.border = "1px solid #00cc00";
        }  else {
            if (event.keyCode == 8) {} else {
                event.preventDefault();
            }
        }
    });
</script>
@endsection