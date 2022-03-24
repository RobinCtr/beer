<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset ('layouts/dashboard/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('layouts/dashboard/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset ('layouts/dashboard/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset ('layouts/dashboard/assets/images/favicon.png') }}"/>
  </head>
  <body>
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <form>
                  <div class="form-group">
                    <label>Nombre Completo</label>
                    <input type="text" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="password" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Acepto aviso de privacidad</label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  
                  <p class="sign-up text-center">Already have an Account?<a href="{{ route ('login') }}"> Sign Up</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="{{ route ('aviso')}}"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

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
</script>




    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset ('layouts/dashboard/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset ('layouts/dashboard/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset ('layouts/dashboard/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset ('layouts/dashboard/assets/js/misc.js') }}"></script>
    <script src="{{ asset ('layouts/dashboard/assets/js/settings.js') }}"></script>
    <script src="{{ asset ('layouts/dashboard/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>