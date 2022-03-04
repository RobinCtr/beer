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
    const patron = /[a-zA-Z]+/;

    $marca.addEventListener("keydown", event => {
        if (patron.test(event.key)) {
            document.getElementById('marca').style.border = "1px solid #00cc00";
        } else {
            event.preventDefault();
        }
    });
    const $tamaño = document.querySelector("#tamaño");
    const patronT = /[0-9\b]+/;

    $tamaño.addEventListener("keydown", event => {
        if (patronT.test(event.key)) {
            document.getElementById('tamaño').style.border = "1px solid #00cc00";
        } else {
            event.preventDefault();
        }
    });
    const $precio = document.querySelector("#precio");
    const patronP = /[0-9\.]+/;

    $precio.addEventListener("keydown", event => {
        if (patronP.test(event.key)) {
            document.getElementById('precio').style.border = "1px solid #00cc00";
        } else {
            event.preventDefault();
        }
    });
    const $cantidad = document.querySelector("#cantidad");
    const patronC = /[0-9\.]+/;

    $cantidad.addEventListener("keydown", event => {
        if (patronC.test(event.key)) {
            document.getElementById('cantidad').style.border = "1px solid #00cc00";
        } else {
            event.preventDefault();
        }
    });
</script>
@endsection