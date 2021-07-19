<?php
	include("../conexion.php");
	$conexion=new ConexionDB();
  	$cnn=$conexion->iniciarDB();

	$go=$_POST["go"];
	$nom=$_POST["nombres"];
	$ape=$_POST["apellidos"];
	$dni=$_POST["dni"];
	$fec=$_POST["fnacimiento"];
	$ema=$_POST["email"];
	$cont=$_POST["password"];
	$dir=$_POST["direccion"];
	$cel=$_POST["celular"];
	$id=$_POST["id"];


	if($go=="delete"){
		$id=$_POST["id"];
		$sql="DELETE FROM socios WHERE idsocios=".$id;
		if (!$cnn->query($sql)) {
        	printf("Error: %s\n", $cnn->error);
    	}
	}
	
	if($go=="create"){
		$sql="INSERT INTO socios(nombres,apellidos,dni,fnacimiento,email,password,direccion,celular) VALUES('$nom','$ape','$dni','$fec','$ema','$cont','$dir','$cel')";
		if (!$cnn->query($sql)) {
        	printf("Error: %s\n", $cnn->error);
    	}
	}

	if($go=="update"){
		$sql="UPDATE socios SET nombres='$nom',apellidos='$ape',dni='$dni',fnacimiento='$fec',email='$ema',password='$cont',direccion='$dir',celular='$cel' WHERE idsocios='$id'";
		if (!$cnn->query($sql)) {
        	printf("Error: %s\n", $cnn->error);
    	}
	}


?>