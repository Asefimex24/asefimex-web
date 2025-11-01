<section id="products" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Nuestros Productos</h2>
            <p>Productos Disponibles</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Todos</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php
            foreach ($productos as $prod => $producto) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <img src="assets/img/products/<?php echo $producto['imagen'] ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo $producto['nombre'] ?></h4>
                        <p><?php echo $producto['descripcion'] ?></p>
                        <a href="assets/img/products/<?php echo $producto['imagen'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="Más Información" target="_blank"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</section>