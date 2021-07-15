<?php

?>
<script>
  $("#formulario").on("submit", function(event,validate){
    event.preventDefault();
    $.ajax({
            url: "crud.php",
            type: "post",
            data: $(this).serialize(),
            beforeSend: function() {
              //$('.msg').html("<img src='img/ajax-loader.gif' />");
              console.log("Enviando formulario");
            },
        }) 
        .done(function (res) {                  
            console.log("los datos han llegado");
            $.fancybox.close();
            $("#crud").load("tractoreo_list.php");
                                      
        })
        .fail(function (res){                    
            console.log(res);
        });
  });
</script>

<div class="formulario">
<form method="post" id="formulario">
  <fieldset>
    <input type="hidden" name="go" value="create">
    <legend>Maquinaria</legend>
    <div class="form-group">
      <label class="mt-4" style="color: black">Modelo de la maquinaria</label>
      <input type="text" class="form-control" name="modelo_maquinaria" placeholder="Ingrese el modelo de la maquinaria" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Potencia</label>
      <input type="number" class="form-control" name="potencia" placeholder="Ingrese la potencia" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Cilindros</label>
      <input type="number" class="form-control" name="cilindros" placeholder="Ingrese el número de cilindros" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Tipo de maquinaria</label>
      <input type="text" class="form-control" name="tipo_maquinaria" placeholder="Ingrese el tipo de maquinaria" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Descripción</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una breve descripción del la maquinaria" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Registrar maquinaria</button>
  </fieldset>
</form>
</div>