      <div class = "modal fade" id= "new">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button tyle = "button" class = "close" data-dismiss = "modal" aria-hidden="true">&times;</button>
              <h4 class = "modal-title">Nuevo Usuario - Informacion necesaria</h4>
            </div>

            <div class = "modal-body">

              <form id="newUser" class="formulario">
                <table>
                  <tr>
                    <td>
                      <p id="av1">Nuevo Usuario</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="text" id="user" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <p id="av2">Contraseña</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="password" id="contrasena" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <p id="av3">Repetir Contraseña</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="password" id="rcontrasena" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
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

        $("#crear").click(function(event) {

          var request;

          var nick = $('#user').val();
          var nueva = $('#contrasena').val();
          var rnueva = $('#rcontrasena').val();

          if(request)
            request.abort();

          request = $.ajax({
            url: "<?=base_url('User/New')?>",
            type: "POST",
            data: "nick=" + nick + "&nueva=" + nueva + "&rnueva=" + rnueva
          });

          request.done(function (response, textStatus, jqXHR){
            alert(response);
            location.href = "<?=base_url()?>User";
          });

          request.fail(function(jqXHR,textStatus, thrown){
            console.log("Error:" + textStatus);
          });

          event.preventDefault();

        });

      });

      </script>
