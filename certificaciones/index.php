<!DOCTYPE html>
<html lang="es">

<?php
include("../controller/control.certificaciones.php");
include("../models/model.certificaciones.php");
include("../get_env.php");

if (isset($_GET['cert'])) {
  if (!empty($_GET["cert"])) {



    $certificacion = Control_Certificacion::Ctr_getCertificacion($_GET['cert']);
    if (!empty($certificacion)) {

    
      include '../views/modulos/header.php';
?>

      <body>
          <?php include '../views/modulos/wap-icon.php' ?>

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
                <li><a href="index.html">Nosotros</a></li>
                <li>Certificaciones</li>
              </ol>
              <h2></h2>

            </div>
          </section>
          <!-- End Breadcrumbs -->

          <!-- ======= Portfolio Details Section ======= -->
          <section id="portfolio-details" class="portfolio-details">
            <div class="container">

              <div class="row gy-4">

                <div class="col-lg-8">
                  <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                      <div class="swiper-slide">
                        <img src="<?php echo $_ENV["HOME_ROUTE"]."/assets/img/cert/".$certificacion['imagen']; ?>" alt="">
                      </div>
                      <!--
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div> -->

                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  <br><br>
                  <h3><?php echo $certificacion['descripcion']; ?></h3>
                  <p>
                    <?php echo $certificacion['contenido']; ?>
                  </p>
                </div>

                <div class="col-lg-4">
                  <div class="portfolio-info">
                    <h3><?php echo $certificacion['titulo']; ?></h3>
                    <ul>

                      <li><strong>Descripción</strong>: <?php echo $certificacion['descripcion']; ?></li>
                      <li><strong>Categoría</strong>: Certificaciones</li>
                      <li><strong>Fecha de Inicio</strong>: <?php echo $certificacion['fecha_inicio']; ?></li>
                      <li><strong>Última Actualización</strong>: <?php echo $certificacion['fecha_inicio']; ?></li>
                    </ul>
                  </div>

                </div>

              </div>

            </div>
          </section>
          <!-- End Portfolio Details Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <?php

        include("../views/modulos/footer.php");

        ?>

        <!-- End Footer -->

        <?php

          // include("scripts_footer.php");

        ?>

      </body>

</html>
<?php
    } else {
      regresar();
    }
  } else {
    regresar();
  }
} else {
  regresar();
}

function regresar()
{
  header('Location: ../nosotros/#certificaciones');
}
?>