<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::PRODUCTOS::.</title>
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
<body class="bg-secondary">
<!-- Header -->
<header class="container-fluid py-2 pt-4" style="height: 400px; background-repeat: no-repeat;background-size: cover; background-image: url('./img/FondoPantalla2.jpeg')">
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
                    <h1 class="fs-1 text-dark">ASPAAH - Productos</h1>
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
<div class="container-fluid bg-white py-5">
    <!-- Slide Content -->
    <div class="">
        <div id="carouselExampleCaptions" class="carousel slide pb-5" aling=center data-bs-ride="carousel">
            <!-- Slider -->
            <!-- Slider -->
            <div id="line-slide" class="d-flex justify-content-center align-items-center bg-white my-3">
                <p class="letra cursive fs-3 m-0 text-warning">Maquinas Agricolas</p>
            </div>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="text-center">
                            <img src="img/Serie F.png" class="rounded" width="345px">
                        </div>
                    </div>

                    <div class="col">
                        <div class="text-center">
                            <img src="img/Serie A.png" class="rounded" width="345px">
                        </div>

                    </div>
                    <div class="col">
                        <div class="text-center">
                            <img src="img/Serie G.png" class="rounded" width="345px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="col-9">
                            <table class="table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Modelo :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">F75</p></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Cilindros :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">4</p></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Potencia :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">Kw 55 /</p></td>
                                        <td><p class="letra2 cursive text-secundary">Nm 320</p></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col-9">
                            <table class="table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Modelo :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">A75</p></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Cilindros :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">3</p></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Potencia :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">Kw 56 /</p></td>
                                        <td><p class="letra2 cursive text-secundary">Nm 312</p></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col">
                        <div class="col-9">
                            <table class="table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Modelo :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">G105</p></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Cilindros :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">4</p></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Potencia :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">Kw 78 /</p></td>
                                        <td><p class="letra2 cursive text-secundary">Nm 490</p></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-outline-danger">Revisar</button>
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-outline-danger">Revisar</button>
                        </div>

                    </div>
                    <div class="col">
                       <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-outline-danger">Revisar</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>



            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="text-center">
                            <img src="img/Serie N.png" class="rounded" width="345px">
                        </div>
                    </div>

                    <div class="col">
                        <div class="text-center">
                            <img src="img/Serie T.png" class="rounded" width="345px">
                        </div>

                    </div>
                    <div class="col">
                        <div class="text-center">
                            <img src="img/Serie S.png" class="rounded" width="345px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="col-9">
                            <table class="table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Modelo :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">N335</p></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Cilindros :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">4</p></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Potencia :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">Kw 99 /</p></td>
                                        <td><p class="letra2 cursive text-secundary">Nm 620</p></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col-10">
                            <table class="table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Modelo :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">T144</p></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Cilindros :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">6</p></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Potencia :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">Kw 118 /</p></td>
                                        <td><p class="letra2 cursive text-secundary">Nm 640</p></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col">
                        <div class="col-10">
                            <table class="table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Modelo :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">S274</p></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Cilindros :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">8</p></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row"><p class="letra2 cursive text-danger">Potencia :</p></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p class="letra2 cursive text-secundary">Kw 206 /</p></td>
                                        <td><p class="letra2 cursive text-secundary">Nm 1220</p></td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-outline-danger">Revisar</button>
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-outline-danger">Revisar</button>
                        </div>

                    </div>
                    <div class="col">
                       <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-outline-danger">Revisar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="scripts/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>  <!-- Slider -->

</body>
</html>
