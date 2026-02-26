<!DOCTYPE html>
<html lang="es">

<?php
include("views/modulos/header.php");
$heros = Control_Hero::Ctr_getHeros();
$publicaciones = Control_Publicaciones::Ctr_getPublicaciones();
$directorio = Control_directorio::Ctr_getDirectorio();
$directivos = Control_directivos::Ctr_getDirectivos();
$testimonios = Control_testimonio::Ctr_getTestimonios();
$productos = Control_productos::ctr_getProductos();
include("./get_env.php");
?>
<style>
    .float-wa {
        position: fixed;
        left: 100;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        z-index: 100;
    }
</style>

<body>

    <a href="https://wa.me/5219615792121?text=Necesito+información" class="float-wa" target="_blank">
        <i class="fa fa-whatsapp" style="margin-top:16px;"></i>
    </a>

    <?php
    // include("views/modulos/modal_video.php");
    include("views/modulos/modal-aviso-fraudes.php");
    ?>

    <!-- ======= Menu principal ======= -->
    <?php
    include("views/modulos/menu_header.php");
    ?>
    <!-- ======= Menu principal ======= -->


    <!-- ======= Home Hero Section ======= -->
    <?php
    include("views/modulos/home_hero.php");
    ?>
    <!-- ======= Home Hero Section ======= -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <?php
        include("views/modulos/solicitud.php");
        ?>
        <!-- ======= About Section ======= -->


        <!-- ======= Counts Section ======= -->
        <?php
        #include("views/modulos/count.php");
        ?>
        <!-- End Counts Section -->


        <!-- ======= productos  ======= -->
        <?php
        include("views/modulos/productos.php");
        ?>
        <!--  productos  -->


        <!-- ======= Publicaciones ======= -->
        <?php
        include("views/modulos/publicaciones.php");
        ?>
        <!--  publicaciones  -->


        <!-- ======= Directorio principal ======= -->
        <?php
        #include("views/modulos/directorio.php");
        ?>
        <!-- Directorio principal -->

        <!-- ======= Directorio Directivos ======= -->
        <?php
        #include("views/modulos/directivos.php");
        ?>
        <!-- Directorio Directivos -->


        <!-- ======= Why Us Section ======= -->
        <?php
        #include("views/modulos/whyus.php");
        ?>
        <!-- ======= End Why Us Section ======= -->


        <!-- ======= Testimonials  ======= -->
        <?php
        include("views/modulos/testimonios.php");
        ?>
        <!-- End Testimonials Section -->
        <!-- ======= Solicita ahora ======= -->
        <section id="superate" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>¡¡ Impulsa el futuro de tu hijo(a) con Supérate y Fundación BBVA !!</h3>
                    <p> ¿Sabías que tu hijo(a) puede acceder a recursos educativos gratuitos de alto nivel?
                    </p>
                </div>
                <div class="text-center">
                    <img src="assets/img/superatebbva.png" width="35%" height="35%" style="align-items: center;">
                    <br>
                    <a class="cta-btn" href="https://forms.gle/nuMmwy2tmGTSAsb8A">Regístrate Aquí</a>
                
                </div>


            </div>
        </section>

        <?php
        include_once("modulos/video-promo.php");
        ?>

        <!-- ======= Solicita ahora ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Solicita tu Crédito Ahora</h3>
                    <p> Llévate tu Mototaxi Fácil y Rápido con pagos Quincenales y hasta 2 años de financiamiento.
                    </p>
                    <a class="cta-btn" href="#">Solicitar Crédito</a>
                </div>

            </div>
        </section>
        <!-- End Solicita ahora -->

        <!-- ======= contacto Section ======= -->
        <?php
        include("views/modulos/contact.php");
        ?>
        <!-- End contacto Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include("views/modulos/footer.php");
    ?>
    <!-- End Footer -->

    <!-- scripts Footer -->
    <?php
    include("views/modulos/scripts_footer.php");
    ?>
    <!-- scripts Footer -->

</body>

<script>
    //para abrir el modal del video promocional
    // var myModal = document.getElementById('staticBackdrop');

    //para abrir el modal de aviso contra fraudes
    var myModal = document.getElementById('Aviso-Fraude-Modal');
    var modal = bootstrap.Modal.getOrCreateInstance(myModal)
    modal.show()
</script>

</html>