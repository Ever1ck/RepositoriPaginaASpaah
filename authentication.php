<?php
session_start();
include_once("conexion.php");

$conexion=new ConexionDB();
$cnn=$conexion->iniciarDB();
 
$email=$_REQUEST["email"];
$passd=$_REQUEST["password"];



$sql="SELECT * FROM socios WHERE email='".$email."' AND password='".$passd."'";
$socio=$cnn->query($sql);
if($data=$socio->fetch_array()){
    $_SESSION['id'] = $data["idsocios"];;
    $_SESSION['nombres'] = $data["nombres"];
    $_SESSION['apellidos'] = $data["apellidos"];
        //header('Location: sistema.php');
?>
	<script>window.location.href = "index";</script>
<?php
}else{
	echo "no se encontro el usuario";
?>
    <script>window.location.href = "login.php";</script>
<?php
}
?>