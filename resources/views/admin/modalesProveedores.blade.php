<!-- Modal AGREGAR USUARIO-->
<div class="modal fade" id="agregarProveedor" tabindex="-1" aria-labelledby="agregarProveedorModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarProveedorModal">AGREGAR PROVEEDOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
               
            <div class="modal-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{route('admin.proveedores.alta')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombreProveedor">Nombre del Proveedor</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Proveedor" value="{{old('nombre')}}"> 
                        </div>
                      
                        <div class="form-group col-md-6">
                            <label for="rfc">RFC del Proveedor</label>
                            <input type="text" class="form-control" name="rfc" id="rfc" placeholder="RFC del Proveedor" value="{{old('rfc')}}">
                            
                        </div>
                      
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="calle">Calle del Domicilio Fiscal</label>
                            <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle del Domicilio Fiscal" value="{{old('calle')}}">
                            
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="municipio">Municipio del Domicilio Fiscal</label>
                            <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Municipio del Domicilio Fiscal" value="{{old('municipio')}}">
                           
                        </div>
                       
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="estado">Estado del Domicilio Fiscal</label>
                            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado del Domicilio Fiscal" value="{{old('estado')}}">
                           
                        </div>
                      
                        <div class="form-group col-md-6">
                            <label for="numero">Número del Domicilio Fiscal</label>
                            <input type="number" class="form-control" name="numero" id="numero" placeholder="Número del Domicilio Fiscal" value="{{old('numero')}}">
                           
                        </div>
                      
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono de contacto" value="{{old('telefono')}}">
                           
                        </div>
                       
                        <div class="form-group col-md-6">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo de contacto" value="{{old('correo')}}">
                            
                        </div>
                   
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-info" id="save">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal EDITAR PROVEEDOR-->
@foreach($proveedores as $proveedor)
<div class="modal fade" id="editarProveedor{{$proveedor->id}}" tabindex="-1" aria-labelledby="editarProveedorModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarUsuarioModal">EDITAR Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.proveedores.editar',['id'=> $proveedor->id])}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombreProveedor">Nombre del Proveedor</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$proveedor->nombre}}" placeholder="Nombre del Proveedor">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rfc">RFC del Proveedor</label>
                            <input type="text" class="form-control" name="rfc" id="rfc"  value="{{$proveedor->rfc}}" placeholder="RFC del Proveedor">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="calle">Calle del Domicilio Fiscal</label>
                            <input type="text" class="form-control" name="calle" id="calle" value="{{$proveedor->calle}}"  placeholder="Calle del Domicilio Fiscal">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="municipio">Municipio del Domicilio Fiscal</label>
                            <input type="text" class="form-control" name="municipio" id="municipio"  value="{{$proveedor->municipio}}" placeholder="Municipio del Domicilio Fiscal">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="estado">Estado del Domicilio Fiscal</label>
                            <input type="text" class="form-control" name="estado" id="estado" value="{{$proveedor->estado}}" placeholder="Estado del Domicilio Fiscal">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="numero">Número del Domicilio Fiscal</label>
                            <input type="number" class="form-control" name="numero" id="numero" value="{{$proveedor->numero}}"  placeholder="Número del Domicilio Fiscal">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono"  value="{{$proveedor->telefono}}" placeholder="Telefono de contacto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" name="correo" id="correo"  value="{{$proveedor->correo}}" placeholder="Correo de contacto">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-info" id="save">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Modal ELIMINAR PROVEEDOR-->
@foreach($proveedores as $proveedor)
<div class="modal fade" id="eliminarProveedor{{$proveedor->id}}" tabindex="-1" aria-labelledby="editarProductoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProductoModal">ELIMINAR PROVEEDOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">DESEA ELIMINAR AL PROVEEDOR {{$proveedor->nombre}} con correo {{$proveedor->correo}} </label>

                    </div>

                </div>


                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <a href="{{route('admin.proveedores.eliminar',['id'=> $proveedor->id])}}">
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


