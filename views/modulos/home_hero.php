<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <?php
            foreach ($heros as $key => $hero_value) {
                if ($hero_value['id'] == 1) { ?>
                    <!-- active slide-->
                    <div class="carousel-item active" style="background-image: url(<?php echo $_ENV['HOME_ROUTE']."assets/img/slide/". $hero_value['imagen']; ?>)">
                        <div class="carousel-container">
                            <div class="container">                                                           
                                <h2 class="animate__animated animate__fadeInDown"><?php echo $hero_value['titulo']; ?></h2>
                                <p class="animate__animated animate__fadeInUp"><?php echo $hero_value['descripcion']; ?></p>
                                <a href="https://asefimex.lightia.mx/client" class="btn-get-started animate__animated animate__fadeInUp scrollto" target="_blank">Quiero un
                                    Crédito
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <!-- secondary slide -->
                    <div class="carousel-item" style="background-image: url(<?php echo $_ENV['HOME_ROUTE']."assets/img/slide/". $hero_value['imagen']; ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"><?php echo $hero_value["titulo"]; ?></h2>
                                <p class="animate__animated animate__fadeInUp"><?php echo $hero_value["descripcion"]; ?></p>
                                <a href="https://asefimex.lightia.mx/client" class="btn-get-started animate__animated animate__fadeInUp scrollto" target="_blank">Quiero un
                                    Crédito</a>
                            </div>
                        </div>
                    </div>
            <?php }
            }  ?>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>