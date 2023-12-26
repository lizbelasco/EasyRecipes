<?php

require_once '../clases/Usuario.php';
$usu = new Usuario();
$id = $_GET['id'];
$usu->setidUsuario($id);
$resultado = $usu->listarUno();


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
          <h3 class="box-title">Modificar Usuario</h3>
            <!-- /.box-header -->
            <div class="box-body">

<body>
  <div class="container">
    <div class="card card-container">
      
      <p class="profile-name-card">
        
      </p>
      <h2 style="color:#ffffff; text-align:center;">Modificar Usuario</h2>
      <form class="form" action="modificar.php" method="post"enctype="multipart/form-data">

      <?php foreach($resultado as $u): ?>
      <input type="hidden" class="form-control" name="idUsuario" value="<?=$u['idUsuario'];?>">

       <input type="text" class="form-control" placeholder="Correo" name="Correo" required autofocus
       value="<?=$u['Correo'];?>">


       <input type="password" class="form-control" placeholder="Contrasena" name="Contrasena" 
       value="<?=$u['Contrasena'];?>">

       <input type="file" class="form-control" placeholder="Foto" name="Foto" 
       value="<?=$u['Foto'];?>">

       <input type="hidden" class="form-control" placeholder="Nivel" name="Nivel" 
       value="<?=$u['Nivel'];?>">



       <button class="btn btn-success btn-lg btn-block">Aceptar</button>


        <?php endforeach;?>
      </form>
    </div><!--fin card-->
  </div><!--fin container-->


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
</body>

