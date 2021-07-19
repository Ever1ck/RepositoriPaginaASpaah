<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::ASPAAH::.</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slider.css">
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
<body class="bg-secondary">
<!-- Header -->

<header class="" style="height: 100vh; background-repeat: no-repeat;background-size: cover;">

    <!-- NavBar -->
    <?php
    include ("php/sesiones.php")
    ?>

    <!-- Main -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="height: 100vh">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/FondoPantalla3.jpeg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/FondoPantalla2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/FondoPantalla1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</header>
<!-- Separata -->
<div class="bg-dark" style=" box-sizing: border-box;">
    <div class="container">
        <div class="row">
            <div style="text-align: center; color: #ffffff; margin: 0px 0px 23px; padding: 23px 0px 0px; line-height: 28px; font-size: 20px; font-family: helvetica_lt_stdbold;">
                <span style="font-size: 14pt;">Somos ASPAAH <span style="color: #ffd35a;">¡Elije la mejor opción!</span></span>
            </div>
        </div>
    </div>
</div>
<!-- Content -->
<div class="container-fluid bg-white">
    <!-- Slide Content 1-->
    <div id="line-slide" class="d-flex justify-content-center align-items-center bg-white ">
        <h1 class=" m-0 d-inline-block p-3 ">Nuestras Maquinarias</h1>
    </div>
    <hr size="8px" color="black" />
    <div class="py-4">
        <div id="carouselExampleCaptions" class="carousel slide" aling=center data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button id="indicators" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button id="indicators" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button id="indicators" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button id="indicators" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button id="indicators" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>

            <div class="carousel-inner">
                <div id="carousel-item" class="carousel-item active p-2">
                    <div class="container-item">
                        <div class="border w-50 border-warning">
                            <img src="img/tractor1.png" class="w-100" alt="...">
                            <div class="text-center">
                                <h5 class="m-0 text-warning">Tractor 1</h5>
                                <p class="text-white">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carousel-item" class="carousel-item p-2">
                    <div class="container-item">
                        <div class="border w-50 border-warning">
                            <img src="img/tractor2.png" class="w-100" alt="...">
                            <div class="text-center">
                                <h5 class="m-0 text-warning">Tractor 2</h5>
                                <p class="text-white">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carousel-item" class="carousel-item p-2">
                    <div class="container-item">
                        <div class="border w-50 border-warning">
                            <img src="img/tractor3.png" class="w-100" alt="...">
                            <div class="text-center">
                                <h5 class="m-0 text-warning">Tractor 3</h5>
                                <p class="text-white">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carousel-item" class="carousel-item p-2">
                    <div class="container-item">
                        <div class="border w-50 border-warning">
                            <img src="img/tractor4.png" class="w-100" alt="...">
                            <div class="text-center">
                                <h5 class="m-0 text-warning">Tractor 4</h5>
                                <p class="text-white">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carousel-item" class="carousel-item p-2">
                    <div class="container-item">
                        <div class="border w-50 border-warning">
                            <img src="img/tractor5.png" class="w-100" alt="...">
                            <div class="text-center">
                                <h5 class="m-0 text-warning">Tractor 5</h5>
                                <p class="text-white">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <span id="productos"></span>

        </div>
        <!-- Slider -->
        <!-- Slider 3  -->

        <div id="line-slide" class="d-flex justify-content-center align-items-center bg-white my-3">
            <h1 class=" m-0 d-inline-block p-3 ">Nuestros Productos</h1>
        </div>
        <hr size="8px" color="black" />
        <div class="slider-container">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <img src="img/img1.jpg" alt="">
                            <p>leche</p>
                        </li>
                        <li class="glide__slide">
                            <img src="img/img2.jpg" alt="">
                            <p>Mantequilla</p>
                        </li>
                        <li class="glide__slide">
                            <img src="img/img3.jpg" alt="">
                            <p>Queso</p>
                        </li>
                        <li class="glide__slide">
                            <img src="img/img4.jpg" alt="">
                            <p>Yogurt</p>
                        </li>
                        <li class="glide__slide">
                            <img src="img/img5.jpg" alt="">
                            <p>mozzarela</p>
                        </li>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                </div>
            </div>
        </div>
        <!-- Slider 3  -->
    </div>

    <!-- About us -->
    <span id="nosotros"></span>
    <div class="container-fluid bg-success" >
        <div class="container">
            <div class="row content-info h-100 py-5">
                <div class="col-md-3 imagen-inform d-flex">
                    <img src="img/vaca2.jpg" alt width="100%">
                </div>
                <div class="col-md-9 text-white text-center text-md-start pt-3 p-md-0">
                    <h4 class="cursive text-warning">Sobre nosotros.</h4>
                    <h2 class="mb-4">¿Quienes Somos?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perspiciatis rem vitae, sint vel commodi aperiam maiores repudiandae quia beatae! Omnis obcaecati error vitae? Illo blanditiis ducimus distinctio sapiente suscipit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique porro provident sunt culpa eos, consequuntur debitis. Ad expedita, maiores eos illo facilis quis, temporibus officiis deleniti, hic eum beatae culpa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit sit autem molestiae officiis enim, nemo, cumque nisi necessitatibus harum maiores saepe. Delectus quibusdam sit quod saepe dolore doloremque tempora accusantium. </p>
                    <a class="btn btn-warning px-4" href="#">More about us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners -->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-3 d-md-flex align-items-center text-center bg-info py-4">
                <div class="socios-int text-white">
                    <p class="m-0 fs-4 cursive text-warning">Lorem, ipsum dolor.</p>
                    <h2 class="mb-4">Socios</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, voluptates.</p>
                    <a class="mt-4 px-4 btn btn-warning" id="btn" href="">Inscribete</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center">
                        <a class="text-black pe-4" href=""><i class="icon-socio fs-1 far fa-lightbulb"></i></a>
                        <div class="pb-3 mt-4 socios-line-top">
                            <h4 class="text-warning">Lorem ipsum dolor sit.</h4>
                            <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quo beatae, blanditiis, ullam laboriosam itaque dolores explicabo enim eveniet facilis pariatur ad alias cupiditate ipsam maxime quia in et ex?</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <a class="text-black pe-4" href=""><i class="fs-2 fas fa-tractor"></i></a>
                        <div class="pb-3 mt-4 socios-line-top">
                            <h4 class="text-warning">Lorem ipsum dolor sit.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quo beatae, blanditiis, ullam laboriosam itaque dolores explicabo enim eveniet facilis pariatur ad alias cupiditate ipsam maxime quia in et ex?</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <a class="text-black pe-4" href=""><i class="fs-1 fas fa-feather-alt"></i></a>
                        <div class="socios-line-bottom pt-4">
                            <h4 class="text-warning">Lorem ipsum dolor sit.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quo beatae, blanditiis, ullam laboriosam itaque dolores explicabo enim eveniet facilis pariatur ad alias cupiditate ipsam maxime quia in et ex?</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <a class="text-black pe-4" href=""><i class="fs-1 fas fa-cheese"></i></a>
                        <div class="socios-line-bottom pt-4">
                            <h4 class="text-warning">Lorem ipsum dolor sit.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quo beatae, blanditiis, ullam laboriosam itaque dolores explicabo enim eveniet facilis pariatur ad alias cupiditate ipsam maxime quia in et ex?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script><!-- Slider -->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script><!-- Slider -->
<script>
    const config ={
        type: 'carousel',
        startAt: 0,
        perView: 5,
        breakpoints: {
            1024: {
                perView: 3
            },
            600: {
                perView: 1
            }
        }
    }
    new Glide(".glide", config).mount();
</script>
<script src="js/scripts.js"></script>

</body>
</html>
