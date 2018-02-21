
      <nav class="navbar navbar-default navbar-custom">
        <div class="container-fluid">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Navegación</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <span class="navbar-brand">
              <?=$usuario?>
            </span>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

              <li <?php if($inicio) { ?>class="active"<?php } ?>>
                <a href="<?= base_url()?>Admin/Home/"><span class = "fa fa-home"></span> Inicio</a>
              </li>
              <li <?php if($cita) { ?>class="active"<?php } ?>>
                <a href="<?= base_url()?>Appointment/"><span class = "fa fa-address-card"></span> Citas</a>
              </li>
              <li <?php if($pacientes) { ?>class="active"<?php } ?>>
                <a href="<?= base_url()?>Patient/"><span class = "fa fa-users"></span> Pacientes</a>
              </li>
              <li <?php if($doctores) { ?>class="active"<?php } ?>>
                <a href="<?= base_url()?>Doctor/"><span class = "fa fa-user-md"></span> Doctores</a>
              </li>
              <li <?php if($usuarios) { ?>class="active"<?php } ?>>
                <a href="<?= base_url()?>User/"><span class = "fa fa-user"></span> Usuarios</a>
              </li>
              <li>
                <a href="<?= base_url()?>Admin/Exit"><span class = "fa fa-times"></span> Salir</a>
              </li>

            </ul>
          </div>
      </nav>
