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

          $("button").on("click", function (e){

            var user = $(this).attr('name');
            var id = $(this).attr('id');

            fila = id;
            usuario = user;

            $("#mensaje").text('¿Desea eliminar al usuario "' + user + '"?');

          });

          $("#delete").click(function(event) {

            var request;

            if(request)
              request.abort();

            request = $.ajax({
              url: "<?=base_url('User/DeleteThis')?>",
              type: "POST",
              data: "user=" + usuario + "&id=" + fila
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
