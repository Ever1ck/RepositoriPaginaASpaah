<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="text-center">

<main class="form-signin formulario">
    <form action="authentication.php" method="POST">
        <h1>Iniciar Sesion</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" name="email" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="password" placeholder="Contraseña">
            </div>
            <input type="submit" value="Login" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes una cuenta? <a class="link" href="register">Registrate </a></p>
            <p>Regresar a la pagina principal <a class="link" href="index">Aqui </a></p>
        </div>
    </form>
</main>



</body>
</html>