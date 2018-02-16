
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
          <input type="text" class = "form-control" value="<?=$nombre?>" disabled>
          <br>

          <label class="etiqueta">Apellido Paterno</label>
          <input type="text" class = "form-control" value="<?=$apellidoP?>" disabled>
          <br>

          <label class="etiqueta">Apellido Materno</label>
          <input type="text" class = "form-control" value="<?=$apellidoM?>" disabled>

        </section>
        <aside>
          <label class="etiqueta">CURP</label>
          <input type="text" class = "form-control" value="<?=$CURP?>" disabled>
          <br>

          <label class="etiqueta">Sexo</label>
          <input type="text" class = "form-control" value="<?=$sexo?>" disabled>
          <br>

          <label class="etiqueta">Fecha de nacimiento</label>
          <input type="text" class = "form-control" value="<?php

            $date = DateTime::createFromFormat("Y-m-d", $fecha_nacimiento);

            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            echo $date->format('d')." de ".$meses[$date->format('n')-1]. " del ".$date->format('Y') ;

          ?>" disabled>
          <br>

          <label class="etiqueta">Direccion</label>
          <input type="text" class = "form-control" value="<?=$direccion?>" disabled>

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

        });

      });

      </script>
