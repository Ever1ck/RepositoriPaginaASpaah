<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" aria-label="Eighth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand border border-3 border-warning bg-white" href="index">
            <img src="img/logo.png" alt="" width="70px" height="60px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="nav-link" class="nav-link navbar-brand" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link navbar-brand" href="quienes-somos.php">¿Quienes somos?</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link navbar-brand" href="socios">Socios</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link navbar-brand" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link navbar-brand" href="noticias.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link navbar-brand" href="contactanos.php">Contactanos</a>
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
                            <li><a class="dropdown-item" href="gestionar/sistema.php">Gestionar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>


<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
</body>
</html>