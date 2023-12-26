<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= $servidor; ?>images/usuario/<?= $_SESSION['Foto']; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $_SESSION['login']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU PRINCIPAL</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Menu</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <?php if ($_SESSION['Nivel'] < 3) {
          ?>

            <li class="active"><a href="<?= $servidor; ?>index.php"><i class="fa fa-circle-o"></i>Pagina Principal</a></li>
            <li><a href="<?= $servidor; ?>Usuario/listar.php"><i class="fa fa-circle-o"></i>Usuario</a></li>


          <?php } ?>
        </ul>
      </li>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">AURELIA</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Restaurante</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($_SESSION['Nivel'] < 3) {
            ?>
              <li class="active"><a href="<?= $servidor; ?>Ingredientes/listar.php"><i class="glyphicon glyphicon-apple"></i>Ingredientes Disponibles</a></li>
              <li class="active"><a href="<?= $servidor; ?>Pedidos/listar.php"><i class="fa fa-circle-o"></i>Pedidos</a></li>
            <?php } ?>
          </ul>
        </li>

  </section>
  <!-- /.sidebar -->
</aside>