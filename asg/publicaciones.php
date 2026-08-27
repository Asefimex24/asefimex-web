<section id="pubs" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Publicaciones</h2>
            <p>Publicaciones Recientes</p>
        </div>

        <div class="row">

            <?php foreach ($publicaciones as $key => $publi_value) { ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="<?php echo $_ENV['HOME_ROUTE']; ?>publicaciones/<?php echo $publi_value["id"]; ?>"><?php echo $publi_value["titulo"]; ?></a></h4>
                        <p><?php echo $publi_value["descripcion"]; ?></p>
                        <p>Fecha:<?php echo " " . $publi_value["fecha_inicio"]; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</section>