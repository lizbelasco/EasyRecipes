<?php require_once '../Clases/Usuario.php';?>
<?php
$usu = new Usuario();
$resultado = $usu->listar();


?>


<?php include_once '../template/head.php'; ?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/aside.php'; ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuarios
        <small>Control de Usuario</small>
      </h1>
      
    <div class="box">
            <div class="box-header">
          <h3 class="box-title">Agregar Usuario</h3>
            <!-- /.box-header -->
            <div class="box-body">
            
            <div class="container">
    <div class="card card-container">
      <p class="profile-name-card">
      </p>
      <h2 style="color:#fff; text-align:center;">Agregar Usuario</h2>
      <form enctype ="multipart/form-data" class="form" action="guardar.php" method="post">
      <div class="form-group">
       <input type="text" class="form-control" placeholder="Ingresa Correo" name="Correo">
      </div>
        <div class="form-group">
       <input type="password" class="form-control" placeholder="Ingresa contrasena" name="Contrasena">
        </div>
       <div class="form-group">
       <input type="file" class="form-control" placeholder="selecciona archivo" name="Foto">
  </div>
   
    <select name="Nivel" id="Nivel">
    <option value="1">SUPER ADMINISTRADOR</option>
    <option value="2">SUPERVISOR</option> 
    <option value="3">CLIENTE</option>  
</select>
<div class="row">

       <button class="btn btn-success btn-lg btn-block">Aceptar</button>
      </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


    </section>

    </div>




<?php include_once '../template/footer.php'; ?>


