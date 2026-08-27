<!DOCTYPE html>
<html lang="es">
<?php
 
  include("../get_env.php");
   include '../views/modulos/header.php'
?>

<body>

  <!-- ======= Header ======= -->
  <?php
    include('../views/modulos/menu-header.php');
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Herramientas</h2>
          <p>Herramientas</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              En este apartado encontrará las herramientas tecnológicas recomendadas por el equipo de Tecnología y Sistemas de Asefimex,
              para un buen funcionamiento del equipo.
            </p>
            <!--
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
-->

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              El equipo de T.I. está a disposición para ofrecer soporte y capacitación en el uso de cada una de estas soluciones.
              ¡Esperamos que estas herramientas mejoren su experiencia laboral y contribuyan al éxito de Asefimex!
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">

      <div class="container" data-aos="fade-up">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-google"></i>
              <span>Web</span>
              <p><strong>Google Chrome</strong> es el navegador web recomendado para colaboradores</p>
              <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7BCE3B2A09-81BC-6602-9A20-7E1358BFC024%7D%26lang%3Des%26browser%3D4%26usagestats%3D1%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-statsdef_1%26installdataindex%3Dempty/update2/installers/ChromeSetup.exe">Descarga Aquí</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-file-earmark-zip"></i>
              <span>Winrar</span>
              <p><strong>Winrar</strong> recomendado para comprimir y descomprimir archivos fácilmente</p>
              <a href="https://d.winrar.es/d/103z1744658668/5VZhmwBjPq2hHVXNJBIAsw/winrar-x64-711es.exe">Descarga Aquí</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-file-pdf"></i>
              <span>Pdf</span>
              <p><strong>Sumatra PDF</strong> recomendada para abrir y administrar archivos PDF</p>
              <a href="https://www.sumatrapdfreader.org/dl/rel/3.5.2/SumatraPDF-3.5.2-64-install.exe">Descarga Aquí</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span>Soporte</span>
              <p><strong>RustDesk</strong> se utiliza para dar soporte remoto a usuarios de Asefimex</p>
              <a href="https://github.com/rustdesk/rustdesk/releases/download/1.4.4/rustdesk-1.4.4-x86_64.msi">Descarga Aquí</a>
            </div>
          </div>
        </div>  
     
      </div> 
      
      
    </section>

     <section id="counts" class="counts">

      <div class="container" data-aos="fade-up">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-printer"></i>
              <span>Scanner</span>
              <p><strong>Naps 2</strong> es la aplicación recomendada para escanear documentos.</p>
              <a href="https://github.com/cyanfish/naps2/releases/download/v8.2.1/naps2-8.2.1-win-x64.exe">Descarga Aquí</a>
            </div>
          </div>

        </div>       
      </div> 
            
    </section>

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