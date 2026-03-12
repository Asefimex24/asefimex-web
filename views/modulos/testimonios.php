<section id="carr-products" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Nuestros Clientes</h2>
            <p>Nuestros Clientes Dicen...</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <?php
                foreach ($testimonios as $test => $opinion) { ?>
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php echo $opinion["imagen"]; ?>" class="testimonial-img" alt="">
                                <h3><?php echo $opinion["nombre"]; ?></h3>
                                <h4><?php echo $opinion["ocupacion"]; ?></h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?php echo $opinion["contenido"]; ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <h4><?php echo $opinion["fecha"]; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>