
      <div id="content">
        <a id="create" href = "#new" class="form-control btn-success" style="text-align: center; text-decoration: none;" data-toggle = 'modal'>Nuevo medico</a>
        <hr>
        <p class="title">
          Medicos registrados en sistema
        </p>

        <?php

          if($doc == null)
          {
            echo "<h2> No hay medicos registrados en el sistema </h2>";
          }
          else
          {
            $content  = "<div class='table-responsive' style='width: 80%; margin: 0 auto;''>";
            $content .= "<table class='table table-hover table-bordered table-condensed'>";
            $content .=	"<thead>";
            $content .=	"<tr>";
            $content .= "<th style='text-align: center;'>No. Trabajador</th>";
            $content .= "<th style='text-align: center;'></th>";
            $content .= "<th style='text-align: center;'>Nombre</th>";
            $content .= "<th style='text-align: center;'>Apellido Paterno</th>";
            $content .= "<th style='text-align: center;'>Apellido Materno</th>";
            $content .= "<th style='text-align: center;'> Acciones</th>";
            $content .=	"</tr>";
            $content .=	"</thead>";
            $content .=	"<tbody>";
            $id = 0;
            foreach ($doc->result_array() as $medico)
            {
              $content .= "<tr id ='tr$id'>";
              foreach ($medico as $fila => $value)
              {
                if($fila == "nombre")
                {
                  $content .= "<td style='text-align: center;'>".$medico['idmedico']."</td>";
                  if($medico['sexo'] == 'Hombre')
                    $content .= "<td style='text-align: center;'>Dr.</td>";
                  else
                    $content .= "<td style='text-align: center;'>Dra.</td>";
                  $content .= "<td style='text-align: center;'>". $value ."</td>";
                  $content .= "<td style='text-align: center;'>". $medico['apellidoP'] ."</td>";
                  $content .= "<td style='text-align: center;'>". $medico['apellidoM']."</td>";
                  if($medico['sexo'] == 'Hombre')
                    $content .= "<td style='text-align: center;'><Button name = 'Dr. $value _".$medico['idmedico']."' id = '$id' class = 'btn btn-danger' href='#eliminar' data-toggle = 'modal'>Baja</Button></td>";
                  else
                    $content .= "<td style='text-align: center;'><Button name = 'Dra. $value _".$medico['idmedico']."' id = '$id' class = 'btn btn-danger' href='#eliminar' data-toggle = 'modal'>Baja</Button></td>";

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
        ?>

      </div>
