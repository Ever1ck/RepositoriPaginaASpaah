<?php
	include("../conexion.php");
    $conexion=new ConexionDB();
    $cnn=$conexion->iniciarDB();

	$go=$_POST["go"];
	$mod=$_POST["modelo"];
	$pot=$_POST["potencia"];
	$cil=$_POST["cilindros"];
	$tip=$_POST["tipo"];
	$des=$_POST["descripcion"];
	$id=$_POST["id"];


	if($go=="delete"){
		$id=$_POST["id"];
		$sql="DELETE FROM maquinarias WHERE idmaquinaria=".$id;
		if (!$cnn->query($sql)) {
            printf("Error: %s\n", $cnn->error);
		}
	}
	
	if($go=="create"){
		$sql="INSERT INTO maquinarias(modelo,potencia,cilindro,tipo,descripcion) VALUES('$mod','$pot','$cil','$tip','$des')";
        if (!$cnn->query($sql)) {
            printf("Error: %s\n", $cnn->error);
		}
	}

	if($go=="update"){
		$sql="UPDATE maquinarias SET modelo='$mod',potencia='$pot',cilindro='$cil',tipo='$tip',descripcion='$des' WHERE idmaquinaria='$id'";
        if (!$cnn->query($sql)) {
            printf("Error: %s\n", $cnn->error);
		}
	}


?>