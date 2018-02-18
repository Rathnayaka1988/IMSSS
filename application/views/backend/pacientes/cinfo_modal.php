      <div class = "modal fade" id="modificarnet">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button tyle = "button" class = "close" data-dismiss = "modal" aria-hidden="true">&times;</button>
              <h4 class = "modal-title">Cambiar Carnet</h4>
            </div>

            <div class = "modal-body">

              <form id="updatePass" class="formulario">
                <input type="text" id="idup2" class="form-control" value= "" style="width: auto; display: none">
                <table>
                  <tr>
                    <td>
                      <p id="aviso1">Carnet Anterior</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="text" id="acarnet" class="form-control" value= "<?= $carnet ?>" required style="width: auto" disabled>
                    </td>
                  </tr>
                  <tr>
                    <td colspan='3'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <p id="aviso2"> Nuevo Carnet</p>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                      <input type="text" id="ncarnet" class="form-control" value= "" required style="width: auto">
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
              <input type="button" id="change" class = "btn btn-success" data-dismiss = "modal" value="Aceptar">
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">

      $(document).ready(function() {

          $('#change').click(function() {

            var request;

            var carnet = $('#ncarnet').val();

            if(request)
              request.abort();

            request = $.ajax({
              url: "<?=base_url('Patient/Carnet')?>",
              type: "POST",
              data: "nuevo=" + carnet + "&seguro=" + <?= $noSeguro ?>
            });

            request.done(function (response, textStatus, jqXHR){
              alert(response);
              location.href = "<?=base_url()?>Patient/Show/<?= $noSeguro?>";
            });

            request.fail(function(jqXHR,textStatus, thrown){
              console.log("Error:" + textStatus);
            });

            event.preventDefault();

          });

      });

      </script>
