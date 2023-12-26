<header class="main-header">
  <!-- Logo -->
  <a href="http://localhost/RE_Cal/index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>AUR</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Aurelia</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= $servidor; ?>images/usuario/<?= $_SESSION['Foto']; ?>" class="user-image" alt="User Image">
            <!-- 'Foto' puse una ruta para que pueda entrar-->
            <span class="hidden-xs"> <?= $_SESSION['login']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?= $servidor; ?>images/usuario/<?= $_SESSION['Foto']; ?>" class="img-circle" alt="User Image">

              <?php
              $Nivel;
              if ($_SESSION['Nivel'] == 1) {
                $Nivel = "Super Administrador";
              } else if ($_SESSION['Nivel'] == 2) {
                $Nivel = "Supervisor";
              }

              ?>



              <p>
                <?= $_SESSION['login']; ?> <br> <?= $Nivel; ?>
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?= $servidor; ?>Usuario/perfil.php" class="btn btn-default btn-flat">Perfil</a>
              </div>
              <div class="pull-right">
                <a href="<?= $servidor; ?>login.php" class="btn btn-default btn-flat">Salir</a>

              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>