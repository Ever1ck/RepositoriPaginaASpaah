<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::NOTICIAS::.</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slider.css">
    <!-- Fonts Family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
</head>
<body class="bg-white">
<!-- Header -->
<header class="container-fluid py-2 pt-4 mb-5" style="height: 400px; background-image: url('./img/fondo2.jpg');">
    <!-- NavBar -->
    <?php
    include ("php/sesiones.php")
    ?>
    <!-- Main -->
    <main class="row title-container py-5">
        <!-- Title -->
        <div class="col-md-6 d-flex flex-column ps-md-5 text-center py-5 ">
            <div>
                <p class="cursive fs-3 m-0 text-warning">Titulo</p>
            </div>
            <div>
                <div class="title">
                    <h1 class="fs-1">ASPAAH - Noticias</h1>
                </div>
            </div>
        </div>
        <!-- Imagen Main-->

        <div class="col-md-1 text-center text-white d-md-block d-flex align-items-center">
            <div class="bg-white my-2" id="line"></div>
            <div class="d-flex d-md-block">
                <div class="ms-2 m-md-0"><a class="text-white" href="#"><i class="fab fa-whatsapp"></i></a></div>
                <div class="ms-2 m-md-0"><a class="text-white" href="#"><i class="fab fa-facebook-f"></i></a></div>
                <div class="ms-2 m-md-0"><a class="text-white" href="#"><i class="fab fa-instagram"></i></a></div>
            </div>
        </div>
    </main>
</header>
<!-- Content -->
<div class="container-fluid bg-white mb-5">
    <!-- About us -->
    <div class="container-fluid bg-success">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img id="yohe" src="img/aldahyr1.jpg" alt width="100%">
            </div>
            <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">MARTES 1 DE JUNIO</h4>
                <h2 align=justify class="mb-4">Dia de la Leche</h2>
                <p align=justify>El Día Internacional de la Leche se celebra todos los años el 1 de junio. Se trata de un día en el que se pretende enseñar a la población mundial los beneficios que la leche a aporta al ser humano.</p>
                <p align=justify>Por ello ASPAAH promueve al consumo de la leche para personas de todas las edades. invitandote al PRIMER CONCURSO DE CALIDADES A LA MEJOR LECHE y optras acticidades que realisamos en omenaje no solo a la leche, sino que a los productores de leche de Puno. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-info">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr3.jpg" alt width="100%">
            </div>
            <div class="col-md-9  order-first text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">24 DE JUNIO</h4>
                <h2 align=justify class="mb-4">FELIZ ANIVERSARIO ASPAAH</h2>
                <p align=justify>Feliz día a todos los productores agropecuarios y en especial a la organización ASPAAH PUNO, que un día como hoy inicia sus actividades oficialmente con el compromiso de cambiar la realidad de sector ganadero en nuestra región de Puno y en especial nuestra Provincia de San Román. Atte. El consejo directivo.</p>
                <p align=justify>Por un año mas al servicio de cada persona, la organisacion ASPAAH le hace llegar una invitacion a usted emprendedor, agricultor a ser socio de esta familia y llevar bien en alto nuestra cultura puneña. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-success">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr2.jpg" alt width="100%">
            </div>
            <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">MARTES 1 DE JUNIO</h4>
                <h2 align=justify class="mb-4">Dia de la Leche</h2>
                <p align=justify>El Día Internacional de la Leche se celebra todos los años el 1 de junio. Se trata de un día en el que se pretende enseñar a la población mundial los beneficios que la leche a aporta al ser humano.</p>
                <p align=justify>Por ello ASPAAH promueve al consumo de la leche para personas de todas las edades. invitandote al PRIMER CONCURSO DE CALIDADES A LA MEJOR LECHE y optras acticidades que realisamos en omenaje no solo a la leche, sino que a los productores de leche de Puno. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-info">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img id="yohe" src="img/aldahyr1.jpg" alt width="100%">
            </div>
            <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">MARTES 1 DE JUNIO</h4>
                <h2 align=justify class="mb-4">Dia de la Leche</h2>
                <p align=justify>El Día Internacional de la Leche se celebra todos los años el 1 de junio. Se trata de un día en el que se pretende enseñar a la población mundial los beneficios que la leche a aporta al ser humano.</p>
                <p align=justify>Por ello ASPAAH promueve al consumo de la leche para personas de todas las edades. invitandote al PRIMER CONCURSO DE CALIDADES A LA MEJOR LECHE y optras acticidades que realisamos en omenaje no solo a la leche, sino que a los productores de leche de Puno. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-success">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr3.jpg" alt width="100%">
            </div>
            <div class="col-md-9  order-first text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">24 DE JUNIO</h4>
                <h2 align=justify class="mb-4">FELIZ ANIVERSARIO ASPAAH</h2>
                <p align=justify>Feliz día a todos los productores agropecuarios y en especial a la organización ASPAAH PUNO, que un día como hoy inicia sus actividades oficialmente con el compromiso de cambiar la realidad de sector ganadero en nuestra región de Puno y en especial nuestra Provincia de San Román. Atte. El consejo directivo.</p>
                <p align=justify>Por un año mas al servicio de cada persona, la organisacion ASPAAH le hace llegar una invitacion a usted emprendedor, agricultor a ser socio de esta familia y llevar bien en alto nuestra cultura puneña. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-info">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr2.jpg" alt width="100%">
            </div>
            <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">MARTES 1 DE JUNIO</h4>
                <h2 align=justify class="mb-4">Dia de la Leche</h2>
                <p align=justify>El Día Internacional de la Leche se celebra todos los años el 1 de junio. Se trata de un día en el que se pretende enseñar a la población mundial los beneficios que la leche a aporta al ser humano.</p>
                <p align=justify>Por ello ASPAAH promueve al consumo de la leche para personas de todas las edades. invitandote al PRIMER CONCURSO DE CALIDADES A LA MEJOR LECHE y optras acticidades que realisamos en omenaje no solo a la leche, sino que a los productores de leche de Puno. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-success">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">MARTES 1 DE JUNIO</h4>
                <h2 align=justify class="mb-4">Dia de la Leche</h2>
                <p align=justify>El Día Internacional de la Leche se celebra todos los años el 1 de junio. Se trata de un día en el que se pretende enseñar a la población mundial los beneficios que la leche a aporta al ser humano.</p>
                <p align=justify>Por ello ASPAAH promueve al consumo de la leche para personas de todas las edades. invitandote al PRIMER CONCURSO DE CALIDADES A LA MEJOR LECHE y optras acticidades que realisamos en omenaje no solo a la leche, sino que a los productores de leche de Puno. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
            <div class="col-md-3 imagen-inform d-flex">
                <img id="yohe" src="img/aldahyr1.jpg" alt width="100%">
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-info">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr3.jpg" alt width="100%">
            </div>
            <div class="col-md-9  order-first text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">24 DE JUNIO</h4>
                <h2 align=justify class="mb-4">FELIZ ANIVERSARIO ASPAAH</h2>
                <p align=justify>Feliz día a todos los productores agropecuarios y en especial a la organización ASPAAH PUNO, que un día como hoy inicia sus actividades oficialmente con el compromiso de cambiar la realidad de sector ganadero en nuestra región de Puno y en especial nuestra Provincia de San Román. Atte. El consejo directivo.</p>
                <p align=justify>Por un año mas al servicio de cada persona, la organisacion ASPAAH le hace llegar una invitacion a usted emprendedor, agricultor a ser socio de esta familia y llevar bien en alto nuestra cultura puneña. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-success">
        <div class="row content-info h-100 py-5 px-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr2.jpg" alt width="100%">
            </div>
            <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">MARTES 1 DE JUNIO</h4>
                <h2 align=justify class="mb-4">Dia de la Leche</h2>
                <p align=justify>El Día Internacional de la Leche se celebra todos los años el 1 de junio. Se trata de un día en el que se pretende enseñar a la población mundial los beneficios que la leche a aporta al ser humano.</p>
                <p align=justify>Por ello ASPAAH promueve al consumo de la leche para personas de todas las edades. invitandote al PRIMER CONCURSO DE CALIDADES A LA MEJOR LECHE y optras acticidades que realisamos en omenaje no solo a la leche, sino que a los productores de leche de Puno. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-secondary">
        <div class="row content-info h-100 py-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr3.jpg" alt width="100%">
            </div>
            <div class="col-md-9  order-first text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">24 DE JUNIO</h4>
                <h2 align=justify class="mb-4">FELIZ ANIVERSARIO ASPAAH</h2>
                <p align=justify>Feliz día a todos los productores agropecuarios y en especial a la organización ASPAAH PUNO, que un día como hoy inicia sus actividades oficialmente con el compromiso de cambiar la realidad de sector ganadero en nuestra región de Puno y en especial nuestra Provincia de San Román. Atte. El consejo directivo.</p>
                <p align=justify>Por un año mas al servicio de cada persona, la organisacion ASPAAH le hace llegar una invitacion a usted emprendedor, agricultor a ser socio de esta familia y llevar bien en alto nuestra cultura puneña. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-secondary">
        <div class="row content-info h-100 py-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr2.jpg" alt width="100%">
            </div>
            <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">MARTES 1 DE JUNIO</h4>
                <h2 align=justify class="mb-4">Dia de la Leche</h2>
                <p align=justify>El Día Internacional de la Leche se celebra todos los años el 1 de junio. Se trata de un día en el que se pretende enseñar a la población mundial los beneficios que la leche a aporta al ser humano.</p>
                <p align=justify>Por ello ASPAAH promueve al consumo de la leche para personas de todas las edades. invitandote al PRIMER CONCURSO DE CALIDADES A LA MEJOR LECHE y optras acticidades que realisamos en omenaje no solo a la leche, sino que a los productores de leche de Puno. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-secondary">
        <div class="row content-info h-100 py-5">
            <div class="col-md-3 imagen-inform d-flex">
                <img src="img/aldahyr3.jpg" alt width="100%">
            </div>
            <div class="col-md-9  order-first text-white text-center text-md-start pt-3 p-md-0">
                <h4 align=justify class="cursive text-warning">24 DE JUNIO</h4>
                <h2 align=justify class="mb-4">FELIZ ANIVERSARIO ASPAAH</h2>
                <p align=justify>Feliz día a todos los productores agropecuarios y en especial a la organización ASPAAH PUNO, que un día como hoy inicia sus actividades oficialmente con el compromiso de cambiar la realidad de sector ganadero en nuestra región de Puno y en especial nuestra Provincia de San Román. Atte. El consejo directivo.</p>
                <p align=justify>Por un año mas al servicio de cada persona, la organisacion ASPAAH le hace llegar una invitacion a usted emprendedor, agricultor a ser socio de esta familia y llevar bien en alto nuestra cultura puneña. </p>
                <a class="btn btn-warning px-4" href="#">VER MAS.....</a>
            </div>
        </div>
    </div>
    <br>
</div>
<!-- Footer -->
<footer id="footer" class="footer style_1 bg-info pt-5">
    <div class="widgets_row">
        <div class="container">
            <div class="footer_widgets">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer_logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="ASPAAH">
                            </a>
                        </div>
                        <div class="footer_text text-white">
                            <p>ASPAAH | Servicio agricola de la region sur del Peru.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="recent-posts-3" class="widget widget_recent_entries">
                            <h4 class="col-md text-white">Noticias Recientes</h4>
                            <hr style="color: white"/>
                            <ul>
                                <li>
                                    <a href="https://inaem.pe/el-dilema-de-las-empresas-frente-la-legislacion-laboral-en-casos-extremos/" class="text-white">Dia del Padre - Productos en descuento</a>
                                    <span class="post-date text-white-50">4 Abril, 2021</span>
                                </li>
                                <li>
                                    <a href="https://inaem.pe/mas-de-165000-empresas-ya-registraron-su-cci-para-acceder-subsidio-favor-de-trabajadores/" class="text-white">Dia de la agricultura</a>
                                    <span class="post-date text-white-50">2 Abril, 2021</span>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-white">
                        <h4 class="col-md text-white">Contactos</h4>
                        <hr style="color: white"/>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-white" href="">@aspaah</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="">aspaah_web@gmail.com</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="">(111) 222-222</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="col-md text-white">Enlaces de Interés</h4>
                            <hr style="color: white"/>
                            <div class="menu-enlaces-de-interes-container">
                                <ul id="menu-enlaces-de-interes" class="menu">
                                    <li id="menu-item-59" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-59">
                                        <a class="text-white-50" href="http://www.sbs.gob.pe/">SBS</a></li>
                                    <li id="menu-item-60" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-60">
                                        <a class="text-white-50" href="https://www.sunarp.gob.pe/">SUNARP</a></li>
                                    <li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61">
                                        <a class="text-white-50" href="http://www.elperuano.com.pe/">EL PERUANO</a></li>
                                    <li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62">
                                        <a class="text-white-50" href="http://www.sunat.gob.pe/">SUNAT</a></li>
                                    <li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63">
                                        <a class="text-white-50" href="http://www.essalud.gob.pe/">ESSALUD</a></li>
                                    <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64">
                                        <a class="text-white-50" href="http://www.sunafil.gob.pe/">SUNAFIL</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="color: white" class="my-0"/>
    <!-- Copyright -->
    <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        Copyright © 2021 Todos los Derechos Reservados. Creado por
        <a class="text-white" href="https://mdbootstrap.com/">Aspaah.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- ... -->
<!-- Scripts -->
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="scripts/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>  <!-- Slider -->
</body>
</html>
