      <div class = "modal fade" id= "cpass">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button tyle = "button" class = "close" data-dismiss = "modal" aria-hidden="true">&times;</button>
              <h4 class = "modal-title">Cambia tu contraseña</h4>
            </div>

            <div class = "modal-body">

              <form id="updatePass" class="formulario">
                <input type="text" id="idup2" class="form-control" value= "" style="width: auto; display: none">
                <table>
                  <tr>
                    <td>
                      <p id="aviso1">Contraseña Actual</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="password" id="pass" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <p id="aviso2"> Nueva Contraseña</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="password" id="npass" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <p id="aviso3">Repetir Contraseña</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="password" id="nrpass" class="form-control" value= "" required style="width: auto">
                    </td>
                  </tr>
                </table>
              </form>

            </div>

            <div class = "modal-footer">
              <input type="button" class = "btn btn-warning" data-dismiss = "modal" value="Cancelar">
              <input type="button" id="chanp" class = "btn btn-success" data-dismiss = "modal" value="Aceptar">
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">

      $(document).ready(function() {

        $("a").on("click", function (e){

          var user = $(this).attr('name');
          var idelemento = $(this).attr('id');
          var request;

          if(idelemento == "#changep")
          {
            var iduser;

            if(request)
              request.abort();

            request = $.ajax({
              url: "<?=base_url('User/GetInfo')?>",
              type: "POST",
              data: "user=" + user
            });

            request.done(function (response, textStatus, jqXHR){
              iduser = response;
              $('#idup2').val(iduser);
            });
          }

        });

        $("#chanp").click(function(event) {

          var request;

          var id = $('#idup2').val();
          var old = $('#pass').val();
          var nueva = $('#npass').val();
          var rnueva = $('#nrpass').val();

          if(request)
            request.abort();

          request = $.ajax({
            url: "<?=base_url('User/ChangePass')?>",
            type: "POST",
            data: "actual=" + old + "&nueva=" + nueva + "&rnueva=" + rnueva + "&id=" + id
          });

          request.done(function (response, textStatus, jqXHR){
            console.log(response);
          });

          request.fail(function(jqXHR,textStatus, thrown){
            console.log("Error:" + textStatus);
          });

          event.preventDefault();

        });

      });

      </script>
