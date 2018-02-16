
        <p class="title">
          Buscar Derecho Habitante
        </p>

        <div class="buscar">
          <input type="number" id="ser" class="form-control" placeholder="Numero de Seguro Social">
        </div>

        <div id="res">

        </div>

      </div>

      <script type="text/javascript">

        $(document).ready(function() {

          $('#ser').on('input', function(event) {

            var request;
            var i = 0;

            if(request)
              request.abort();

            if($('#ser').val() == "")
            {
              $('#res').html("");
            }
            else
            {
              request = $.ajax({
                url: "<?=base_url('Patient/Search')?>",
                type: "POST",
                data: "seguro=" + $('#ser').val()
              });

              request.done(function (response, textStatus, jqXHR){

                $('#res').html("");
                $('#res').append(response);

              });

              request.fail(function(jqXHR,textStatus, thrown){
                console.log("Error:" + textStatus);
              });

              event.preventDefault();
            }

          });

        });

      </script>
