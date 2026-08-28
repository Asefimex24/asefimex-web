<?php
$empresa = Control_Empresa::ctr_getEmpresas();
?>

<section id="nosotros" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?php echo $_ENV['HOME_ROUTE'] ?>assets/img/default_full2.jpg");' data-aos="zoom-in" data-aos-delay="100">

                <a href="https://youtu.be/lqRCh2V5aR8?si=8-wrt3cj4IjFTLrL" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            
            </div>

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                <div class="content">
                    <h3><strong> Quienes Somos</strong></h3>
                    <p>
                        Somos una Sociedad Financiera de Objeto Múltiple (SOFOM) especializada en el otorgamiento de crédito para la
                        adquisición de Motocarros de pasajeros y de carga, con operaciones desde el 2013 principalmente en el sureste de
                        la República Mexicana.
                    </p>
                </div>

                <div class="accordion-list">
                    <ul>
                        <li>
                           <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>01</span>
                                Misión <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    <?php echo $empresa[0]["mision"]; ?>
                                </p>
                            </div>
                        </li>

                        <li>
                           <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                                Visión <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse show" data-bs-parent=".accordion-list">                        
                                <p>
                                    <?php echo $empresa[0]["vision"]; ?>
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                                Nuestra Historia <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    Somos una Sociedad Financiera de Objeto Múltiple (SOFOM) especializada en el otorgamiento de crédito para la
                                    adquisición de Motocarros de pasajeros y de carga, con operaciones desde el 2013 principalmente en el sureste de
                                    la República Mexicana, supervisada por la Comisión Nacional Bancaria y de Valores (CNBV) y la Comisión Nacional para
                                    la Protección y Defensa de los Usuarios de Servicios Financieros (CONDUSEF).
                                </p>
                                <p>
                                    Al año 2021, cuenta con las siguientes oficinas:

                                    Oficina Principal: Tuxtla Gutiérrez, Chiapas, México.


                                    Número de oficinas de atención: 17 Estados de operación: 12 Al 4t del año 2021 la Entidad cuenta con: Número de
                                    clientes actuales: 2,372 Mujeres: 806 (65.98%) Hombres: 1,565 (33.98%) Morales: 1 (0.04%)
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span>
                                Nuestros Valores <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-4" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    Honestidad: somos una Entidad que busca siempre un desempeño claro y transparente tanto con nuestros clientes como
                                    con nuestro equipo de trabajo.
                                </p>
                                <p>
                                    Responsabilidad: con nuestros clientes al ofrecerles productos innovadores que satisfagan sus necesidades.
                                    Con nuestro recurso humano otorgándole seguridad y prestaciones que aseguren su calidad de vida.
                                </p>
                                <p>
                                    Lealtad:
                                    buscamos una relación empresa-colaborador basada en el compromiso mutuo de buscar la superación para el logro
                                    de objetivos compartidos.
                                </p>

                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span>
                                Enfoque de Negocio <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-5" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    Buscamos relaciones duraderas y enfocadas en la creación de valor. Ofrecemos productos de crédito innovadores,
                                    que responden a las necesidades cambiantes de nuestros clientes, para continuar siendo su mejor opción de financiamiento.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

        </div>

    </div>
</section>