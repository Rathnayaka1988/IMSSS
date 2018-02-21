      <div class = "modal fade" id= "new">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button tyle = "button" class = "close" data-dismiss = "modal" aria-hidden="true">&times;</button>
              <h4 class = "modal-title">Nuevo Cita - Informacion Necesaria</h4>
            </div>

            <div class = "modal-body">

              <div id="registro">
                <form id="newUser" class="formulario">
                  <table>
                    <tr>
                      <td>
                        <p id="av1">No. Seguro</p>
                      </td>
                      <td>&nbsp;</td>
                      <td>
                        <input type="text" id="carnet" class="form-control" value= "" required style="width: 100px">
                      </td>
                    </tr>
                    <tr>
                      <td colspan='3'>&nbsp;</td>
                    </tr>
                  </table>
                </form>
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
          var direccion = $('#direccion').val();
          alert(direccion);

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
                        + "&fecha=" + fecha + "&estado=" + estado + "&direccion=" + direccion
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
