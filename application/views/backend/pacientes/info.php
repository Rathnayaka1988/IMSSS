
      <link rel="stylesheet" href="<?=base_url()?>Resources/css/info.css">

      <div id="content">

        <p class="title">
          Informacion de <?= $nombre ?> <?= $apellidoP ?> <?= $apellidoM ?>
        </p>
        <hr>
        <section>
          <label class="etiqueta">Numero de Seguro Social</label>
          <input type="text" class = "form-control" value="<?=$noSeguro?>" disabled>
          <br>

          <label class="etiqueta">Nombre</label>
          <input id="nombre" type="text" class = "form-control" value="<?=$nombre?>" disabled>
          <br>

          <label class="etiqueta">Apellido Paterno</label>
          <input id="paterno" type="text" class = "form-control" value="<?=$apellidoP?>" disabled>
          <br>

          <label class="etiqueta">Apellido Materno</label>
          <input id="materno" type="text" class = "form-control" value="<?=$apellidoM?>" disabled>

        </section>
        <aside>
          <label class="etiqueta">CURP</label>
          <input id="curp" type="text" class = "form-control" value="<?=$CURP?>" disabled>
          <br>

          <label class="etiqueta">Sexo</label>
          <select class="form-control" id="sexo" style="Display: inline-block; width: 200px" disabled>
            <option value="Hombre"<?php
              if($sexo == 'Hombre')
              {
                ?>
                selected
                <?php
              }
            ?>>Hombre</option>
            <option value="Mujer"<?php
              if($sexo == 'Mujer')
              {
                ?>
                selected
                <?php
              }
            ?>>Mujer</option>
          </select>
          <br>

          <label class="etiqueta">Fecha de nacimiento</label>
          <input type="text" class = "form-control" value="<?php

            $date = DateTime::createFromFormat("Y-m-d", $fecha_nacimiento);

            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            echo $date->format('d')." de ".$meses[$date->format('n')-1]. " del ".$date->format('Y') ;

          ?>" disabled>
          <br>

          <label class="etiqueta">Direccion</label>
          <input id="direccion" type="text" class = "form-control" value="<?=$direccion?>" disabled>

        </aside>

        <hr>
        <p class="title">
          Acciones Disponibles
        </p>
        <center id="normal">
          <button id="act" class = "btn btn-primary">Modificar</button>
          <input type="button" name = "<?= $noSeguro ?>" class = "btn btn-success" href="#modificarnet" data-toggle = "modal" value="Cambiar Carnet">
          <input type="button" name = "<?= $nombre?>" id = "<?= $noSeguro?>" class = "btn btn-danger" href="#eliminar" data-toggle = "modal" value="Baja">
        </center>
        <center id="actualizar" style="Display: none">
          <input type="button" id="subir" class = "btn btn-success" value="Actualizar">
          <input type="button" id="bajar" class = "btn btn-danger" value="Cancelar">
        </center>
      </div>

      <script type="text/javascript">

      $(document).ready(function() {

        $('#act').click(function() {

          $("#normal").css("display","none");
          $("#actualizar").css("display","inherit");

          $('#nombre').removeAttr("disabled");
          $('#paterno').removeAttr("disabled");
          $('#materno').removeAttr("disabled");
          $('#curp').removeAttr("disabled");
          $('#sexo').removeAttr("disabled");
          $('#direccion').removeAttr("disabled");

        });

        $('#subir').click(function() {

          $("#normal").css("display","inherit");
          $("#actualizar").css("display","none");

          $('#nombre').attr("disabled", "disabled");
          $('#paterno').attr("disabled", "disabled");
          $('#materno').attr("disabled", "disabled");
          $('#curp').attr("disabled", "disabled");
          $('#sexo').attr("disabled", "disabled");
          $('#direccion').attr("disabled", "disabled");

          var request;

          var nombre = $('#nombre').val();
          var paterno = $('#paterno').val();
          var materno = $('#materno').val();
          var curp = $('#curp').val();
          var sexo = $('#sexo').val();
          var direccion = $('#direccion').val();

          if(request)
            request.abort();

          request = $.ajax({
            url: "<?=base_url('Patient/Update')?>",
            type: "POST",
            data: "name=" + nombre + "&ap=" + paterno + "&am=" + materno + "&sex=" + sexo + "&curp=" + curp
                  + "&direccion=" + direccion + "&seguro=" + <?= $noSeguro ?>
          });

          request.done(function (response, textStatus, jqXHR){
            alert(response);
          });

          request.fail(function(jqXHR,textStatus, thrown){
            console.log("Error:" + textStatus);
          });


          event.preventDefault();

        });

        $('#bajar').click(function() {
          $("#normal").css("display","inherit");
          $("#actualizar").css("display","none");

          $('#nombre').attr("disabled", "disabled");
          $('#paterno').attr("disabled", "disabled");
          $('#materno').attr("disabled", "disabled");
          $('#curp').attr("disabled", "disabled");
          $('#sexo').attr("disabled", "disabled");
          $('#direccion').attr("disabled", "disabled");
        });

      });

      </script>
