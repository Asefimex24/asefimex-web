<!DOCTYPE html>
<html lang="es">

<?php

// include("./controllers/control.usuarios.php");
// include("./models/model.usuarios.php");


include("header.php");
?>


<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">

      <div class=" text-center" style="margin-top: 10px;  height: 35px;">
        <img src="./adminlte/dist/img/AdminLTELogo2.png" alt="Asefimex" style="width: 15%;"> </a>
      </div>

      <div class="card-header text-center">
        <a href="" class="h1"><b>Asefimex</b>
        </a>
      </div>

      <div class="card-body">
        <form action="" method="post">

          <h6>Correo Electronico</h6>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo Electronico" required>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <h6>Contraseña</h6>
          <div class="input-group mb-3">

            <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>

            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>

          <a href="registro.php">
            <i class="mr-2"></i>Registrarme
          </a>

        </form>

        <!-- /.card-body -->
      </div>

      <!-- /.card -->
    </div>
    <?php


    // $valida = Control_user::ctr_validate_user();
  $valida="";

    if ($valida == "OK") {

      echo '<div class="alert alert-success">Inicio exitoso</div>';
      echo '<script type="text/javascript">
      setTimeout(function() {
        window.location.href= "http://localhost/erp_asefimex/d/?op=ds";
      }, 10)
    </script>';
    }

    if ($valida == "ERROR") {
      echo '<script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>';

      echo
      '<div class="alert alert-warning">
      Usuario y/o contraseña incorrectos
    </div>';

      echo '<script>
      setTimeout(function() {
        window.location = "http://localhost/erp_asefimex/";
      }, 1000)
    </script>';
    }

    if ($valida == "INACTIVO") {
      echo
      '<div class="alert alert-danger">
      >Usuario inactivo
    </div>';

      echo '<script>
      setTimeout(function() {
        window.location = "http://localhost/erp_asefimex/";
      }, 1000)
    </script>';
    }

    if ($valida == "INEXISTENTE") {
      echo
      '<div class="alert alert-danger">
      Usuario no registrado
    </div>';

      echo '<script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>';

      echo '<script>
      setTimeout(function() {
        window.location = "http://localhost/erp_asefimex/";
      }, 1000)
    </script>';
    }

    ?>

    <?php

    include("scripts.php");

    ?>

</body>


</html>