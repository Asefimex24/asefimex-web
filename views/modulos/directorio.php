<section id="directorio" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Directorio</h2>
            <p>consejo de Administración</p>
        </div>

        <div class="row">

            <?php
            $band = 0;
            foreach ($directorio as $jey => $cargos) {
                if ($band <= 3) {
            ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="<?php echo $cargos["foto"]; ?>" class="img-fluid" alt="">

                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4> <a href=""><?php echo $cargos["nombre"]; ?></a></h4>
                                    <span><?php echo $cargos["cargo"]; ?></span>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $cargos["tiwtter"]; ?>"><i class="bi bi-twitter"></i></a>
                                    <a href="<?php echo $cargos["facebook"]; ?>"><i class="bi bi-facebook"></i></a>
                                    <a href="<?php echo $cargos["linkedin"]; ?>"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                    $band = $band + 1;
                }
            } ?>

        </div>
        <div class="row">
            <?php
            $band2 = 0;
            foreach ($directorio as $jey => $cargos2) {
                if ($band2 > 3 && $band < 8) {
            ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="<?php echo $cargos["foto"]; ?>" class="img-fluid" alt="">

                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><a href=""><?php echo $cargos["nombre"]; ?></a></h4>
                                    <span><?php echo $cargos2["cargo"]; ?></span>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $cargos2["tiwtter"]; ?>"><i class="bi bi-twitter"></i></a>
                                    <a href="<?php echo $cargos2["facebook"]; ?>"><i class="bi bi-facebook"></i></a>
                                    <a href="<?php echo $cargos2["linkedin"]; ?>"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
                $band2 = $band2 + 1;
            } ?>
        </div>
    </div>
</section>