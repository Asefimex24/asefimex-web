<!DOCTYPE html>
<html lang="es">
<?php
include "header.php";
?>

<?php
require_once("../models/model.certificaciones.php");
require_once("../controller/control.certificaciones.php");

require_once("../models/model.alianzas.php");
require_once("../controller/control.alianzas.php");

?>

<body>

  <!-- ======= Header ======= -->
  <?php
  include "menu_header.php";
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

    <?php
    include "nosotros.php";
    ?>

    <?php
    #include "sucursales.php";
    ?>
    <?php
    include "certificaciones.php";
    ?>
    <?php
    include "alianzas.php";
    ?>

    <?php
    include "bolsalaboral.php";
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