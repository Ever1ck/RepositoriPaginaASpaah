<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socios</title>
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
    <?php
    include ("php/sesiones.php")
    ?>
</header>
<div class="container mt-3">
    <div id="crud"></div>
</div>
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
<script src="fancybox/dist/jquery.fancybox.min.js"></script>
<script src="bootstrap/jquery.validate.min.js"></script>
<script src="js/scripts.js"></script>

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