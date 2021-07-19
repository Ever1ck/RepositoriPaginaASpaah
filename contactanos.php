<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::CONTACTANOS::.</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts Family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
</head>
<body>
<!-- Header -->
<header class="container-fluid py-2 pt-4 mb-5" style="height: 400px; background-repeat: no-repeat;background-size: cover; background-image: url('./img/fondo2.jpg')">
    <!-- NavBar -->
    <?php
    include ("php/sesiones.php")
    ?>
    <!-- Main -->
    <main class="row title-container m-auto" style="height: 400px;">
        <!-- Title -->
        <div class="col-md-6 d-flex justify-content-center flex-column ps-md-5 text-center text-md-start py-5 py-md-0">
            <div class="">
                <div class="selectors">
                </div>
                <div class="title jus">
                    <h1 class="fs-1 text-white">ASPAAH - Contactanos</h1>
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
    <div class="container ">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="flex-lg-column">
                    <p>Somos especialistas en Mypes, conformamos un grupo de profesionales expertos en asesoría contable, tributaria y financiera. nuestro servicio es integral y personalizado, para mayor información y contacto facilítanos algunos datos.</p>
                    <hr/>
                </div>
                <div class="contatos style_4">
                    <h4 class="no_stripe">Detalles de Contacto</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text"> Salida a Arequipa Km. 15 - Yocará Sector Ilo Ilo 51<br>
                                Juliaca, Perú</div>
                        </li>
                        <li class="list-group-item d-flex">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="text">
                                +51 961 040 551
                            </div>
                        </li>
                        <li class="list-group-item d-flex">
                            <div class="icon"><i class="far fa-envelope"></i></div>
                            <div class="text">
                                <a href="mailto:informes@inaem.pe">aspaahpuno@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-group list-group-horizontal ">
                        <li class="list-group-item">
                            <a href="https://www.facebook.com/Aspaah-Puno-101325701733061/" class="social-facebook" style="color: #3b5998">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="" target="_blank" class="social-twitter" style="color: #00acee">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="" target="_blank" class="social-google-plus" style="color: #db4a39">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="" target="_blank" class="social-instagram" style="color: #804000;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="" target="_blank" class="social-youtube-play" style="color: #c4302b;">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <form action="" method="post" class="form-inline">
                    <div class="request_callback">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group mb-4 contacto">
                                        <span class="name-123">
                                            <input type="text" name="name-123" value="" class="form-control" size="40" placeholder="Nombres Completos *">
                                        </span>
                                </div>
                                <div class="input-group mb-5 contacto">
                                        <span class="ape-123">
                                            <input type="text" name="ape-123" value="" size="40" class="form-control" placeholder="Apellidos Completos *">
                                        </span>
                                </div>
                                <div class="input-group mb-5 contacto">
                                        <span class="company">
                                            <input type="text" name="company" value="" size="40" class="form-control" placeholder="Empresa en la que labora">
                                        </span>
                                </div>
                                <div class="input-group mb-5 contacto">
                                        <span class="email">
                                            <input type="email" name="email" value="" size="40" class="form-control"  placeholder="Correo Electronico *">
                                        </span>
                                </div>
                                <div class="input-group mb-5 contacto">
                                        <span class="tel">
                                            <input type="tel" name="tel" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Teléfono *"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group mb-2 contacto">
                                        <span class="subject">
                                            <input type="text" name="subject" value="" size="40" class="form-control" placeholder="Tema *"></span>
                                </div>
                                <div class="input-group mb-2 contacto">
                                        <span class="message">
                                            <textarea name="message" cols="40" rows="10" class="form-control" placeholder="Mensaje *"></textarea></span>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="input-group contacto">
                                    <center><button type="submit" class="btn btn-primary">Enviar <i class="fa fa-chevron-right"></i></button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div></form>
            </div>
        </div>
    </div>
</div>
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=-15.55649403060745,%20-70.23939108846344&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
        <a href="https://www.embedgooglemap.net"></a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
    </div>
</div>
<!-- Footer -->
<footer id="footer" class="footer style_1 bg-dark pt-5">
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
</body>
</html>