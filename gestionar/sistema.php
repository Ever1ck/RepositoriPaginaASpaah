<?php 
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GESTIONAR</title>
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/fontawesonme/css/font-awesome.css">
	<link rel="stylesheet" href="resources/fancybox/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header class="py-2 pt-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" aria-label="Eighth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand border border-3 border-warning bg-white" href="index">
                <img src="../img/logo.png" alt="" width="70px" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link navbar-brand" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link navbar-brand" onclick="return enlace(this.href)" href="dashboard.php">Dashboard
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link navbar-brand" onclick="return enlace(this.href)" href="socio_list.php">Socios</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link navbar-brand" onclick="return enlace(this.href)" href="maquinaria_list.php">Maquinarias</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="--bs-scroll-height: 100px;">
                        <li class="nav-item dropdown">
                            <a id="nav-link" class="nav-link navbar-brand dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuario: <?php echo $_SESSION['nombres']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="">Gestionar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../logout.php">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-5">
	<div id="crud"></div>
</div>

<script src="resources/bootstrap/jquery.min.js"></script>
<script src="resources/bootstrap/bootstrap.bundle.min.js"></script>
<script src="resources/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="resources/bootstrap/jquery.validate.min.js"></script>
<script src="scripts.js"></script>


<!-- Resources -->
<script src="resources/amcharts4/core.js"></script>
<script src="resources/amcharts4/charts.js"></script>
<script src="resources/amcharts4/themes/animated.js"></script>
<script src="resources/amcharts4/themes/dark.js"></script>

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