      <div class = "modal fade" id= "new">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button tyle = "button" class = "close" data-dismiss = "modal" aria-hidden="true">&times;</button>
              <h4 class = "modal-title">Nuevo Derecho Habitante - Informacion Necesaria</h4>
            </div>

            <div class = "modal-body">

              <div id="registro">
                <form id="newUser" class="formulario">
                  <table>
                    <tr>
                      <td>
                        <p id="av1">Nombre(s)</p>
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <input type="text" id="name" class="form-control" value= "" required style="width: 180px">
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <p id="av1">No. Carnet</p>
                      </td>
                      <td>
                        <input type="text" id="carnet" class="form-control" value= "" required style="width: 180px">
                      </td>
                    </tr>
                    <tr>
                      <td colspan='3'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                        <p id="av2">Apellido Paterno</p>
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <input type="text" id="apellidop" class="form-control" value= "" required style="width: 180px">
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <p id="av3">Apellido Materno</p>
                      </td>
                      <td>
                        <input type="text" id="apellidom" class="form-control" value= "" required style="width: 180px">
                      </td>
                    </tr>
                    <tr>
                      <td colspan='2'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                        <p id="av4">Sexo</p>
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <select class="form-control" id="sex" style="width: 100px;">
                          <option value="." style="display: none">Sexo</option>
                          <option value="Hombre">Hombre</option>
                          <option value="Mujer">Mujer</option>
                        </select>
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <p id="av4">CURP</p>
                      </td>
                      <td>
                        <input maxlength="16" type="text" id="CURP" class="form-control" required style="width: 180px; text-transform:uppercase;">
                      </td>
                    </tr>
                    <tr>
                      <td colspan='3'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                        <p id="av4">Fecha de Nacimiento (YYYY-MM-DD)</p>
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <input type="text" id="fecha" class="form-control" required style="width: 180px;">
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <p id="av4">Estado Nac.</p>
                      </td>
                      <td>
                        <select class="form-control" id="estado" style="width: auto;">
                          <option value="." style="display: none">Estado</option>
                          <?php
                            foreach ($estado->result_array() as $est)
                            {
                              foreach ($est as $fila => $nombre)
                              {
                                if($fila == "descripcion")
                                {
                                  echo "<option value='".$est['idlugar']."'>".$nombre."</option>";
                                }
                              }
                            }
                          ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td colspan='3'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>
                        <p id="av4">Ingreso Mensual</p>
                      </td>
                      <td>&nbsp;&nbsp;</td>
                      <td>
                        <input type="number" id="ingreso" class="form-control" required style="width: 180px;">
                      </td>
                    </tr>
                  </table>
                </form>
              </div>

              <div id="resultados">

              </div>

            </div>

            <div class = "modal-footer">
              <input type="button" class = "btn btn-warning" data-dismiss = "modal" value="Cancelar">
              <input type="button" id="crear" class = "btn btn-success" value="Aceptar">
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">

      $(document).ready(function() {

        var sex = "x";
        var estado = 0;

        $("#crear").click(function(event) {

          var request;

          var nombre = $('#name').val();
          var carnet = $('#carnet').val();
          var ap = $('#apellidop').val();
          var am = $('#apellidom').val();
          var curp = $('#CURP').val();
          var fecha = $('#fecha').val();
          var ing = $('#ingreso').val();

          if(ing <= 4500)
          {
            if(sex != "x")
            {
              if(estado != 0)
              {

                if(request)
                  request.abort();

                request = $.ajax({
                  url: "<?=base_url('Patient/New')?>",
                  type: "POST",
                  data: "name=" + nombre + "&ap=" + ap + "&am=" + am + "&sex=" + sex + "&carnet=" + carnet + "&curp=" + curp + "&sex=" + sex
                        + "&fecha=" + fecha + "&estado=" + estado
                });

                request.done(function (response, textStatus, jqXHR){
                  alert(response);
                  location.href = "<?=base_url()?>Patient";
                });

                request.fail(function(jqXHR,textStatus, thrown){
                  console.log("Error:" + textStatus);
                });

                event.preventDefault();
              }
              else
                alert("Es necesario especificar el estado donde nacio la persona");
            }
            else
              alert("Es necesario introducir el sexo de la persona");
          }
          else
          {
            alert("La persona no puede ser derecho habiente");
            location.href = "<?=base_url()?>Patient";
          }

        });

        $("#sex").change(function(event) {

          sex = $("#sex").val();

        });

        $("#estado").change(function(event) {

          estado = $("#estado").val();

        });

      });

      </script>
