
      <div id="content">        
        <a id="create" href = "#new" class="form-control btn-success" style="text-align: center; text-decoration: none;" data-toggle = 'modal'>Nuevo Usuario</a>
        <hr>
        <p class="title">
          Usuarios con permisos
        </p>

        <?php
          $content  = "<div class='table-responsive' style='width: 80%; margin: 0 auto;''>";
          $content .= "<table class='table table-hover table-bordered table-condensed'>";
          $content .=	"<thead>";
          $content .=	"<tr>";
          $content .= "<th style='text-align: center;'>Nombre</th>";
          $content .= "<th style='text-align: center;' colspan='2'> Acciones</th>";
          $content .=	"</tr>";
          $content .=	"</thead>";
          $content .=	"<tbody>";
          $id = 0;
          foreach ($user->result_array() as $usuario)
          {
            $content .= "<tr id ='tr$id'>";
            foreach ($usuario as $fila => $value)
            {
              if($fila == "nick")
              {
                $content .= "<td style='text-align: center;'>". $value ."</td>";
                $content .= "<td style='text-align: center;'><a id='#changep' name ='$value' class = 'btn btn-warning' href='#cpass' data-toggle = 'modal'>Cambiar Contraseña</a></td>";
                if($value != 'admin' && $usuario['idusuario'] != $this->session->userdata('id'))
                  $content .= "<td style='text-align: center;'><Button name ='$value' id = '$id' class = 'btn btn-danger' href='#eliminar' data-toggle = 'modal'>Eliminar</Button></td>";
                else
                $content .= "<td style='text-align: center;'></td>";
              }
            }
            $content .= "</tr>";
            $id++;
          }
          $content .=	"</tbody>";
          $content .=	"</table>";
          $content .= "</div>";
          echo $content;
        ?>

      </div>
