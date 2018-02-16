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

          var seguro;

          $("button").on("click", function (e){

            var user = $(this).attr('name');
            seguro = $(this).attr('id');

            var persona = user;

            $("#mensaje").text('¿Desea borrar del sistema al "' + persona + '"?');

          });

          $("#delete").click(function(event) {

            var request;

            if(request)
              request.abort();

            request = $.ajax({
              url: "<?=base_url('Patient/DeleteThis')?>",
              type: "POST",
              data: "seguro=" + seguro
            });

            request.done(function (response, textStatus, jqXHR){
              alert(response);
              location.href = "<?=base_url()?>Patient";
            });

            request.fail(function(jqXHR,textStatus, thrown){
              console.log("Error:" + textStatus);
            });

            event.preventDefault();

          });

        });

      </script>
