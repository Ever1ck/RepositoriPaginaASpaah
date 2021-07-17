<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD con PHP</title>
	<link rel="stylesheet" href="fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Fonts Family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
<header class="container-fluid py-2 pt-4">
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success menu">
        <div class="container-fluid">
            <div class="mx-5 px-5"></div>
            <div class="logo border border-3 border-warning bg-white">
                <img src="img/logo.png" alt="logo" width="100%">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pt-4 pt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="nav-link-home" class="nav-link active" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="../quienes-somos.html">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="return enlace(this.href)" href="socio_list.php">Socios</a>
                    <li class="nav-item">
                        <a class="nav-link" onclick="return enlace(this.href)" href="tractoreo_list.php">Maquinarias</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="../productos.html">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="../noticias.html">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="../contactanos.html">Contactos</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="#">Iniciar sesion</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="#">Registrarte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-3">
	<div id="crud"></div>
</div>
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
<script src="fancybox/dist/jquery.fancybox.min.js"></script>
<script src="bootstrap/jquery.validate.min.js"></script>
<script src="scripts.js"></script>

</body>
</html>

<script type="text/javascript">
  function enlace(evento){
  $("#crud").fadeOut(300,function(){
    $(this).load(evento).fadeIn(2000);
  })
  return false;
}
</script>