<h1 class="text-center">Gestión de tractoreo</h1>
  <div class="nuevo">
    <a data-fancybox data-type="ajax" data-src="tractoreo_add.php" href="javascript:;" class="btn btn-primary" >Nueva maquinaria<span class="material-icons"></span></a>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Modelo de la maquinaria</th>
      <th scope="col">Potencia</th>
      <th scope="col">Cilindros</th>
      <th scope="col">Tipo de maquinaria</th>
      <th scope="col">Descripción</th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <?php
  include("conexion.php");
	if(isset($_REQUEST['pagina'])){
	    $pagina=$_REQUEST['pagina'];
	}else{
	    $pagina = 1;
	}
  	$tamano_pagina = 20;

  	$query1="SELECT * FROM maquinarias";
  	$total=mysqli_query($link,$query1);
  	$total_reg = mysqli_num_rows($total);
  	$total_paginas = ceil($total_reg / $tamano_pagina);
	$inicio = ($pagina-1)*$tamano_pagina;
	// TERMINA PAGINADOR
	$query2 = "SELECT * FROM maquinarias ORDER BY id  DESC LIMIT ".$inicio.", ".$tamano_pagina;
	$registros = mysqli_query($link,$query2);
  	
  ?>

  <tbody>
  	<?php
  		$cont=0;
  		while($data=mysqli_fetch_array($registros)){
  		$cont=$cont+1;
  	?>
    <tr class="table-primary">
      <th scope="row"><?= $data[0] ?></th>
      <td><?= $data[1] ?></td>
      <td><?= $data[2] ?></td>
      <td><?= $data[3] ?></td>
      <td><?= $data[4] ?></td>
      <td><?= $data[5] ?></td>
      <td><a data-fancybox data-type="ajax" data-src="tractoreo_edit.php?id=<?= $data[0] ?>" 
	  href="javascript:;"><span class="material-icons">edit</span>Editar</a></td>
      <td><a href="javascript:fn_eliminar(<?= $data[0] ?>)"><span class="material-icons">delete</span>Eliminar</a></td>
    </tr>
   <?php } 
   ?>
  </tbody>
</table>
<div class="paginador text-center">
	<?php
		for ($i=1;$i<$total_paginas;$i++) { 
			
			if($pagina < $total_paginas){
  ?>
			    
          <a href="javascript:fn_paginar(<?= $i ?>)"><?="P".$i?> |</a>
	<?php
      }
		}
	?>
</div>