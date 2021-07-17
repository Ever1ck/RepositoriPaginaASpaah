<?php
error_reporting(0);
session_start();
$seccion_i = $_SESSION['nombres'];
if ($seccion_i == null || $seccion_i == ""){
    include "Nav/nav.php";
}else{
    include("Nav/nav_s.php");
}
?>