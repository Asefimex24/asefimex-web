<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- <h1 class="logo"><a href="index.html">Asefimex</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
         <div class="d-flex align-items-center">
            <a href="#" class="logo">
            <img src="assets/img/logo-vertical.png" alt="" class="img-fluid">
            </a>
         </div>
     
        <?php  ?>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="<?php echo $_ENV['HOME_ROUTE'];  ?>">Inicio</a></li>
                <li><a class="nav-link scrollto active" href="">Nosotros</a></li>
                <li><a class="nav-link scrollto" href="<?php echo $_ENV['HOME_ROUTE'];  ?>#products">Productos</a></li>
                <li class="dropdown"><a href="#"><span>ASG</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?php echo $_ENV['HOME_ROUTE'];  ?>asg/#pubs">Publicaciones</a></li>
                        <li><a href="<?php echo $_ENV['HOME_ROUTE'];  ?>asg/#certs">Certificaciones</a></li>
                        <li><a href="<?php echo $_ENV['HOME_ROUTE'];  ?>asg/#alianzas">Alianzas Estratégicas</a></li>
                        <li><a href="<?php echo $_ENV['HOME_ROUTE'];  ?>asg/">Impacto Social</a></li>
                        <li><a href="<?php echo $_ENV['HOME_ROUTE'];  ?>asg/">Blog Social</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="<?php echo $_ENV['HOME_ROUTE'];  ?>#testimonials">Testimonios</a></li>
                <li><a class="nav-link scrollto" href="<?php echo $_ENV['HOME_ROUTE'];  ?>#contact">Contacto</a></li>
                                <li class="dropdown"><a href="#"><span>Acerca de</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                         <li><a href="<?php echo $_ENV['HOME_ROUTE'];  ?>aviso/">Aviso de Privacidad</a></li>
                        <li><a href="<?php echo $_ENV['HOME_ROUTE'];  ?>une/">Aviso UNE</a></li>
                         <!-- <li><a href="mntto/">Bolsa de Trabajo</a></li> -->
                        <!-- <li><a href="bef/">Buró de Entidades Financieras</a></li> -->
                    </ul>
                </li>


                <li><a class="getstarted scrollto" href="https://asefimex.lightia.mx/client" target="_blank">Registro Cliente</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>