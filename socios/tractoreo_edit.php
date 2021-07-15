<?php
  include("conexion.php");
  $id=$_REQUEST["id"];
  $query="SELECT * FROM gestionar_tractoreo WHERE idgestionar_tractoreo=".$id;
  $socio = mysqli_query($link,$query);
?>
<script>
  $("#formulario").on("submit", function(event,validate){
    event.preventDefault();
    $.ajax({
            url: "crud.php",
            type: "post",
            data: $(this).serialize(),
            beforeSend: function() {
            console.log("Enviando formulario");
            },
        }) 
        .done(function (res) {                  
            console.log("los datos han llegado");
            $.fancybox.close();
            $("#crud").load("tractoreo_list.php");
                                      
        })
        .fail(function (res) {                    
            console.log(res);
        });
  });
</script>
<div class="formulario">
<?php
  if($data=mysqli_fetch_array($socio)){
?>
<form method="post" id="formulario" style="width: 60%">
  <input type="hidden" name="go" value="update">
  <input type="hidden" name="id" value="<?= $data[0] ?>"> 
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label class="mt-4" style="color: black">Modelo de la maquinaria</label>
      <input type="text" class="form-control" name="modelo_maquinaria" placeholder="Ingrese el modelo de la maquinaria" required 
      value="<?= $data[1] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Potencia</label>
      <input type="number" class="form-control" name="potencia" placeholder="Ingrese la potencia" required
      value="<?= $data[2] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Cilindros</label>
      <input type="number" class="form-control" name="cilindros" placeholder="Ingrese el número de cilindros" required
      value="<?= $data[3] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Tipo de maquinaria</label>
      <input type="text" class="form-control" name="tipo_maquinaria" placeholder="Ingrese el tipo de maquinaria" required
      value="<?= $data[4] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Descripción</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una breve descripción del la maquinaria" required
      value="<?= $data[5] ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Actualizar maquinaria</button>
  </fieldset>
</form>

<?php } ?>
</div>