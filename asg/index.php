<!DOCTYPE html>
<html lang="es">
<?php
  require '../get_env.php';
  include '../views/modulos/header.php';
?>

<?php
require_once("../models/model.certificaciones.php");
require_once("../controller/control.certificaciones.php");

require_once("../models/model.publicaciones.php");
require_once("../controller/control.publicaciones.php");


require_once("../models/model.alianzas.php");
require_once("../controller/control.alianzas.php");

require_once("../models/modelo.empresa.php");
require_once("../controller/control.empresa.php");

?>

<body>
  <?php include '../views/modulos/wap-icon.php'; ?>
  <!-- ======= Header ======= -->
  <?php
    include('../views/modulos/menu-header.php');
  ?>
  
  <!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li>Asefimex Financiera</li>
        </ol>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <?php include 'publicaciones.php'; ?>

    <?php
      include "certificaciones.php";
    ?>

    <?php
      include "alianzas.php";
    ?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    include("../views/modulos/footer.php");
  ?>

  <!-- End Footer -->

  <?php
     include "scripts_footer.php";
  ?>

</body>

</html>