      <div class = "modal fade" id= "new">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button tyle = "button" class = "close" data-dismiss = "modal" aria-hidden="true">&times;</button>
              <h4 class = "modal-title">Nuevo Medic@ - Informacion necesaria</h4>
            </div>

            <div class = "modal-body">

              <form id="newUser" class="formulario">
                <table>
                  <tr>
                    <td>
                      <p id="av1">Nombre</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="text" id="name" class="form-control" value= "" required style="width: auto">
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
                      <input type="text" id="apellidop" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <p id="av3">Apellido Materno</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="text" id="apellidom" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <p id="av4">Sexo</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <select class="form-control" id="sex">
                        <option value="." style="display: none">Sexo</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </form>

            </div>

            <div class = "modal-footer">
              <input type="button" class = "btn btn-warning" data-dismiss = "modal" value="Cancelar">
              <input type="button" id="crear" class = "btn btn-success" data-dismiss = "modal" value="Aceptar">
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">

      $(document).ready(function() {

        var sex = "x";

        $("#crear").click(function(event) {

          var request;

          var nombre = $('#name').val();
          var ap = $('#apellidop').val();
          var am = $('#apellidom').val();


          if(sex != "x")
          {
            if(request)
              request.abort();

            request = $.ajax({
              url: "<?=base_url('Doctor/New')?>",
              type: "POST",
              data: "name=" + nombre + "&ap=" + ap + "&am=" + am + "&sex=" + sex
            });

            request.done(function (response, textStatus, jqXHR){
              alert(response);
              location.href = "<?=base_url()?>Doctor";
            });

            request.fail(function(jqXHR,textStatus, thrown){
              console.log("Error:" + textStatus);
            });

            event.preventDefault();
          }
          else
            alert("no");


        });

        $("#sex").change(function(event) {

          sex = $("#sex").val();

        });

      });

      </script>
