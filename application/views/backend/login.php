
    <div id="form">
      <h2>Inicio de Sesión</h2>
      <hr>
      <form class="formulario" method="post" action="<?= base_url()?>Admin/Session">
        <input type="text" id="user" class="form-control" placeholder="Usuario" required autofocus="">
        <br>
        <input type="password" id="pass" class="form-control" placeholder="Contraseña" required>
        <br>
        <input type="submit"  id="send" value="Iniciar sesión" class="btn btn-block">
        <br>
        <span id="result"></span>
      </form>
    </div>

    <script type="text/javascript" src = "<?= base_url()?>Resources/js/login.js"></script>

  </body>
</html>
