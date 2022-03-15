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
                <form action="{{route('admin.usuarios.alta')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombreCompleto">Nombre Completo</label>
                            <input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre Apellido Paterno">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="correo">Correo Electronico</label>
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo@gmail.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="ejemplo123_">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Estatus</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estatus" id="activo" value="Activo">
                                <label class="form-check-label" for="activo">
                                    Activo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estatus" id="inactivo" value="Inactivo">
                                <label class="form-check-label" for="inactivo">
                                    Inactivo
                                </label>
                            </div>

                        </div>


                        <div class="form-group col-md-6">
                            <label for="img">Imagen de Usuario</label>
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

<!-- Modal EDITAR USUARIO-->
@foreach($usuarios as $usuario)
<div class="modal fade" id="editarUsuario{{$usuario->id}}" tabindex="-1" aria-labelledby="editarUsuarioModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarUsuarioModal">EDITAR USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.usuarios.editar',['id'=> $usuario->id])}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombreCompletoEditar">Nombre Completo</label>
                            <input type="text" class="form-control" name="nombreCompleto" id="nombreCompletoEditar" value='{{$usuario->nombreCompleto}}' placeholder="Nombre Apellido Paterno">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefonoEditar">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefonoEditar" value='{{$usuario->telefono}}' placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="correoEditar">Correo Electronico</label>
                            <input type="email" class="form-control" name="correo" id="correoEditar" value='{{$usuario->correo}}' placeholder="ejemplo@gmail.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="passwordEditar">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="passwordEditar" placeholder="ejemplo123_">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Estatus</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estatus" id="activo" value="Activo" @if($usuario->estatus == 'Activo') checked @endif>
                                <label class="form-check-label" for="activo">
                                    Activo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estatus" id="inactivo" value="Inactivo" @if($usuario->estatus == 'Inactivo') checked @endif>
                                <label class="form-check-label" for="inactivo">
                                    Inactivo
                                </label>
                            </div>

                        </div>


                        <div class="form-group col-md-6">
                            <label for="img">Imagen de Usuario</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img" name="img">
                                <input type="file" class="custom-file-input" id="img2" name="img2" value="{{$usuario->img}}">

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
<!-- Modal ELIMINAR USUARIO-->
@foreach($usuarios as $usuario)
<div class="modal fade" id="eliminarUsuario{{$usuario->id}}" tabindex="-1" aria-labelledby="editarProductoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProductoModal">ELIMINAR USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">DESEA ELIMINAR AL USUARIO {{$usuario->nombreCompleto}} con correo {{$usuario->correo}} </label>

                    </div>

                </div>


                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <a href="{{route('admin.usuarios.eliminar',['id'=> $usuario->id])}}">
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


<script>
// VALIDACION DE AGREGAR USUARIO
    const $nombreCompleto = document.querySelector("#nombreCompleto");
    const patronName = /[a-zA-Z/]+/;

    $nombreCompleto.addEventListener("keydown", event => {
        if (patronName.test(event.key)) {
            document.getElementById('nombreCompleto').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });

    const $telefono = document.querySelector("#telefono");
    const patronTelefono = /[0-9]+/;

    $telefono.addEventListener("keydown", event => {
        if (patronTelefono.test(event.key)) {
            document.getElementById('telefono').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    const $password = document.querySelector("#password");
    const patronPass = /[a-zA-Z/0-9/-/_/]+/;

    $password.addEventListener("keydown", event => {
        if (patronPass.test(event.key)) {
            document.getElementById('password').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
// FIN DE VALIDACION DE AGREGAR USUARIO
// VALIDACION DE MODIFICAR USUARIO

const $nombreCompletoEditar = document.querySelector("#nombreCompletoEditar");
    const patronNameEditar = /[a-zA-Z/]+/;

    $nombreCompletoEditar.addEventListener("keydown", event => {
        if (patronNameEditar.test(event.key)) {
            document.getElementById('nombreCompletoEditar').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    const $telefonoEditar = document.querySelector("#telefonoEditar");
    const patronTelefonoEditar = /[0-9]+/;

    $telefonoEditar.addEventListener("keydown", event => {
        if (patronTelefonoEditar.test(event.key)) {
            document.getElementById('telefonoEditar').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    const $passwordEditar = document.querySelector("#passwordEditar");
    const patronPassEditar = /[a-zA-Z/0-9/-/_/]+/;

    $passwordEditar.addEventListener("keydown", event => {
        if (patronPassEditar.test(event.key)) {
            document.getElementById('passwordEditar').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
// Fin modal
</script>