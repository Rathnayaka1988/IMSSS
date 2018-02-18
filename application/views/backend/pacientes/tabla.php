
      <div id="content">
        <a id="create" href = "#new" class="form-control btn-success" style="text-align: center; text-decoration: none;" data-toggle = 'modal'>Nuevo derecho habitante</a>
        <hr>
        <?php

          if($person != null)
          {
          ?>
          <p class="title">
            Ultimos 5 derecho habitantes registrados
          </p>
          <?php
            $content  = "<div class='table-responsive' style='width: 80%; margin: 0 auto;''>";
            $content .= "<table class='table table-hover table-bordered table-condensed'>";
            $content .=	"<thead>";
            $content .=	"<tr>";
            $content .= "<th style='text-align: center;'>No. Seguro</th>";
            $content .= "<th style='text-align: center;'>Nombre</th>";
            $content .= "<th style='text-align: center;'>Apellido Paterno</th>";
            $content .= "<th style='text-align: center;'>Apellido Materno</th>";
            $content .= "<th style='text-align: center;'>CURP</th>";
            $content .= "<th style='text-align: center;'>Edad</th>";
            $content .= "<th style='text-align: center;' colspan='2'>Acciones</th>";
            $content .=	"</tr>";
            $content .=	"</thead>";
            $content .=	"<tbody>";
            $id = 0;
            foreach ($person->result_array() as $paciente)
            {
              $content .= "<tr id ='tr$id'>";
              foreach ($paciente as $fila => $value)
              {
                if($fila == "nombre")
                {
                  $content .= "<td style='text-align: center;'>".$paciente['noSeguro']."</td>";
                  $content .= "<td style='text-align: center;'><a class='enlace' href=".base_url("Patient/Show/".$paciente['noSeguro']).">". $value ."</a></td>";
                  $content .= "<td style='text-align: center;'>". $paciente['apellidoP'] ."</td>";
                  $content .= "<td style='text-align: center;'>". $paciente['apellidoM']."</td>";
                  $content .= "<td style='text-align: center;'>". $paciente['CURP']."</td>";
                  $content .= "<td style='text-align: center;'>asd</td>";
                  $content .= "<td style='text-align: center;'><Button name = '".$paciente['noSeguro']."' class = 'btn btn-warning' href='#modificarnet' data-toggle = 'modal'>Cambiar Carnet</Button></td>";
                  $content .= "<td style='text-align: center;'><Button name = '$value' id = '".$paciente['noSeguro']."' class = 'btn btn-danger' href='#eliminar' data-toggle = 'modal'>Baja</Button></td>";
                }
              }
              $content .= "</tr>";
              $id++;
            }
            $content .=	"</tbody>";
            $content .=	"</table>";
            $content .= "</div>";
            echo $content;
          }
          else {
            {
              ?>
              <p class="title">
                No hay Pacientes registrados en la plataforma
              </p>
              <?php
            }
          }
        ?>

        <hr>
