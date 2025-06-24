<!DOCTYPE html>
<html lang="es">


<head>
<?php
      include("../views/modulos/header_copy.php");
?>

</head>

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
                <li>Promociones</li>
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
                        <img src="referidos.jpeg" alt="">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  <div class="portfolio-description">
                    <h3>Referidos Asefimex</h3>
                    <p style="text-align: justify;">
                     Asefimex te premia: Por cada persona que recomiendes y que adquiera un Motocarro a crédito ganarás $1,000.00 que se abonaran
                     a tu siguiente pago.                  
                    </p>
                    <p>
                      Da click en el siguiente enlace para recomendar a alguien
                    </p>                
                    <a href="../referidos/" class="btn btn-warning">Recomendar una Persona <i class="bi-whatsapp"></i></a>  
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

        include("scripts_footer.php");

        ?>

      </body>

</html>
