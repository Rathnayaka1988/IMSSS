      <div class = "modal fade" id= "eliminar">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button tyle = "button" class = "close" data-dismiss = "modal" aria-hidden="true">&times;</button>
              <h4 class = "modal-title">Advertencia</h4>
            </div>

            <div class = "modal-body">
              <p id="mensaje"><p>
            </div>

            <div class = "modal-footer">
              <input type="button" class = "btn btn-warning" data-dismiss = "modal" value="Cancelar">
              <input type="button" id="delete" class = "btn btn-danger" data-dismiss = "modal" value="Aceptar">
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">

        $(document).ready(function() {

          var fila;
          var usuario;
          var idmedico;

          $("button").on("click", function (e){

            var user = $(this).attr('name');
            var id = $(this).attr('id');

            idmedico = user.split('_')[1];
            var medico = user.split('_')[0];

            fila = id;
            usuario = user;

            $("#mensaje").text('¿Desea borrar del sistema al "' + medico + '"?');

          });

          $("#delete").click(function(event) {

            var request;

            if(request)
              request.abort();

            request = $.ajax({
              url: "<?=base_url('Doctor/DeleteThis')?>",
              type: "POST",
              data: "doc=" + idmedico + "&id=" + fila
            });

            request.done(function (response, textStatus, jqXHR){
              $("#tr" + response).html("");
            });

            request.fail(function(jqXHR,textStatus, thrown){
              console.log("Error:" + textStatus);
            });

            event.preventDefault();

          });

        });

      </script>
