<section id="certificaciones" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>CERTIFICACIONES</h2>
            <p>CERTIFICACIONES ASEFIMEX</p>
        </div>

        <div class="row">

            <?php

            $certificaciones = Control_Certificacion::Ctr_getCertificaciones();

            foreach ($certificaciones as $key => $publi_value) { ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="../certificaciones/<?php echo $publi_value["id"]; ?>"><?php echo $publi_value["titulo"]; ?></a></h4>
                        <p><?php echo $publi_value["descripcion"]; ?></p>
                        <p>Fecha:<?php echo " " . $publi_value["fecha_inicio"]; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</section>