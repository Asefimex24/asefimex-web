<!DOCTYPE html>
<html lang="es">



<?php
include("../controller/control.publicaciones.php");
include("../models/model.publicaciones.php");

if (isset($_GET['pub'])) {
  if (!empty($_GET['pub'])) {

    $publicacion = Control_Publicaciones::Ctr_getPublicacion($_GET['pub']);

    if (!empty($publicacion)) {

      include("header.php");
?>

      <body>

        <!-- ======= Header ======= -->
        <?php

        include("menu_header.php");

        ?>

        <!-- End Header -->

        <main id="main">

          <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <ol>
                <li><a href="../">Inicio</a></li>
                <li>Publicaciones</li>
              </ol>


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
                        <img src="<?php echo $publicacion['imagen']; ?>" alt="">
                      </div>

                      <!--
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>
                 End Portfolio Details Section 
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>-->

                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  <div class="portfolio-description">
                    <h3><?php echo $publicacion['descripcion']; ?></h3>
                    <p style="text-align: justify;">
                      <?php echo $publicacion['contenido']; ?>
                    </p>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="portfolio-info">
                    <h3>
                      <?php echo $publicacion['titulo']; ?>
                    </h3>
                    <ul>
                      <li><strong>Descripción</strong>: <?php echo $publicacion['descripcion'];  ?>
                      </li>
                      <li><strong>Categoría</strong>: Publicaciones</li>
                      <li><strong>Fecha</strong>: <?php echo $publicacion['fecha_inicio']; ?>
                      </li>

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

        include("footer.php");

        ?>

        <!-- End Footer -->

        <?php

        include("scripts_footer.php");

        ?>

      </body>

</html>

<?php
    } else {
      header('Location: https://asefimex.com/#pubs');
    }
  } else {
    header('Location: https://asefimex.com/#pubs');
  }
} else {
  header('Location: https://asefimex.com/#pubs');
}


function regresar()
{
  header('Location: https://asefimex.com/#pubs');
}
?>