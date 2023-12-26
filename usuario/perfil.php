<?php include_once '../template/head.php';?>
  <?php include_once '../template/header.php';?>
  <?php include_once '../template/aside.php';?>
  
  <?php require_once '../clases/Usuario.php';
    $usu = new Usuario();
    $usu->setCorreo($_SESSION['login']);
    $resultado = $usu->listarUsuario();
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuarios
        <small>Control de Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="modificar.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <?php foreach($resultado as $u): ?>
        <input type="hidden" name="idUsuario" value="<?=$u['idUsuario'];?>">
        <div class="form-group has-feedback">
            <img src="../images/usuario/<?=$u['Foto'];?>" style="width:200px; height:200px;">
        </div>
      <div class="form-group has-feedback">
        <input type="file" class="form" placeholder="Foto" name="Foto" required value="<?=$u['Foto'];?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Correo" name="Correo" autofocus required value="<?=$u['Correo'];?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Contrasena" name="Contrasena" required value="<?=$u['Contrasena'];?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-paste form-control-feedback"></span>
        <select name="Nivel" id="Nivel" class="form-control" required value="<?=$u['Nivel'];?>">
        <?php if($_SESSION['Nivel']<2){ ?>
        <option value="1">Super Administrador</option>
        <?php } ?>
        <?php if($_SESSION['Nivel']<3){ ?>
        <option value="2">Supervisor</option>
        <?php } ?>
        <?php if($_SESSION['Nivel']<=3){ ?>
        <option value="3">Usuario</option>
        <?php } ?>  
        </select>
      </div>     
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-success btn-block btn-flat">Aceptar</button>
        </div>
        <!-- /.col -->
      </div>
      </div>
      <?php endforeach;?>
    </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <?php include_once '../template/footer.php';?>