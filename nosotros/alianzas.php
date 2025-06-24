<section id="alianzas" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Alianzas</h2>
            <p>ALIANZAS ESTRATÉGICAS</p>
        </div>

        <div class="row">

            <?php

            $alianzas = Control_alianzas::Ctr_getAlianzas();

            foreach ($alianzas as $key => $alia_value) { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="../alianzas/?al=<?php echo $alia_value["id"]; ?>"><?php echo $alia_value["titulo"]; ?></a></h4>
                        <p><?php echo $alia_value["descripcion"]; ?></p>
                        <p>Fecha:<?php echo " " . $alia_value["fecha_inicio"]; ?></p>
                    </div>
                </div>

            <?php } ?>

        </div>

    </div>
</section>