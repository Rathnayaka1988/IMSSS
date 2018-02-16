$(document).ready(function() {

  var request;

  $(".formulario").submit(function(event){

    var nick = $('#user').val();
    var pass = $('#pass').val();

    if(request)
      request.abort();

    var $form = $(this);

    request = $.ajax({
      url: $form.attr('action'),
      type: 'POST',
      data: "usuario=" + nick + "&contrasena=" + pass
    });

    request.done(function (response, textStatus, jqXHR){

      if(response.indexOf('http') != -1)
      {
        location.href = response;
      }
      else
      {
          $("#result").html(
            "<span id = 'message' style = 'color: rgb(231, 60, 60); font-weight: bold;'>" +
            response + "</span><br><br>");

          setTimeout(function() {
           $("#message").fadeOut(1500);
          },1000);
      }

    });

    request.fail(function(jqXHR, textStatus, errorThrown){



    });

    event.preventDefault();

  });

});
