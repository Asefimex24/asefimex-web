<!DOCTYPE html>
<html lang="es">
<?php
include "header.php";
?>

<body>

  <!-- ======= Header ======= -->
  <?php
    include("../alianzas/menu-header.php");
    require_once "../get_env.php";
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li>Unidad Especializada de Atención a Usuarios</li>
        </ol>
        <h2>Aviso UNE</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">

              <img src="../assets/img/aviso-une.jpg" alt="">


              <!--  <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div> -->
              <!-- <div class="swiper-pagination"></div> -->
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Información</h3>
              <ul>
                <li><strong>Documento</strong>: Aviso UNE</li>
                <li><strong>Propietario</strong>: Asefimex Financiera</li>
              </ul>
            </div>
            <!-- <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia.
                Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia
                accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt
                eius.
              </p>
            </div> -->
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include("../views/modulos/footer.php");
  ?>

  <!-- End Footer -->

  <?php
    // include "scripts_footer.php";
    // include("../views/modulos/scripts_footer.php");
  ?>

</body>

</html>