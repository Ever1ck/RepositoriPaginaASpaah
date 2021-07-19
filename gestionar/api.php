<?php
  include("../conexion.php");
  $conexion=new ConexionDB();
  $cnn=$conexion->iniciarDB();
  
  $go=$_REQUEST['go'];

  if($go=="pie"){
    $sql="SELECT tipo, COUNT(idmaquinaria) as total FROM maquinarias GROUP BY tipo";
    $resulset = $cnn->query($sql); 
    $rows=array();
    while($data=$resulset->fetch_array(PDO::FETCH_ASSOC)){
     $rows[]=$data;
    }
    print (json_encode($rows));
  }

  if($go=="bar"){
    $sql="SELECT 
case 
    when month(fnacimiento) = '01' 
    then 'Ene' 
    when month(fnacimiento) = '02'
    then 'Feb'
    when month(fnacimiento) = '03'
    then 'Mar'
    when month(fnacimiento) = '04'
    then 'Abr' 
    when month(fnacimiento) = '05'
    then 'May' 
    when month(fnacimiento) = '06'
    then 'Jun' 
    when month(fnacimiento) = '07'
    then 'Jul' 
    when month(fnacimiento) = '08'
    then 'Ago' 
    when month(fnacimiento) = '09'
    then 'Set' 
    when month(fnacimiento) = '10'
    then 'Oct' 
    when month(fnacimiento) = '11'
    then 'Nov' 
    when month(fnacimiento) = '12'
    then 'Dic' 
    else null 
  end as mes,
count(idsocios) as cantidad FROM socios GROUP BY month(fnacimiento)";
    $resulset = $cnn->query($sql); 
    $rows=array();
    while($data=$resulset->fetch_array(PDO::FETCH_ASSOC)){
     $rows[]=$data;
    }
    print (json_encode($rows));
  }
 
?>