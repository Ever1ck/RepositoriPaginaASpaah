<?php
  include("../conexion.php");
  $conexion=new ConexionDB();
  $cnn=$conexion->iniciarDB();
  $sql1="SELECT * FROM socios";
  $resulset = $cnn->query($sql1); 
  $cantiad_socios = $resulset->num_rows;
?>

<!-- Styles -->
<style>
.chartdiv {
  width: 100%;
  height: 300px;
}
</style>
<!-- HTML -->
<div class="row align-items-center mb-5">
  <div class="col bg-success  pt-3 pb-3 me-3 text-center text-white">
    <b>Cantidad de socios: <?php echo $cantiad_socios?></b>
  </div>
  <div class="col bg-success  pt-3 pb-3 me-3 text-center text-white">
    Cantidad de maquinarias: <?php echo $cantiad_socios?>
  </div>
  <div class="col bg-success  pt-3 pb-3 me-3 text-center text-white">
    Cantidad de socios: <?php echo $cantiad_socios?>
  </div>
</div>
<div class="row bg-dark">
	<div class="col-md-5 text-center ">
    <h5>Cantidad de Maquimarias por Tipo</h5>
		<div id="chartdiv" class="chartdiv"></div>
	</div>
	<div class="col-md-7 text-center">
    <h5>Cantidad de socios por mes de nacimiento</h5>
    <div id="divbarras" class="chartdiv"></div>
  </div>
</div>

<script type="text/javascript" src="dashboard_pie.js"></script>
<script type="text/javascript" src="dashboard_bar.js"></script>
<!-- Chart code -->
<script>

</script>

