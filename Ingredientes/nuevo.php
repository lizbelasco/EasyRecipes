<?php require_once '../Clases/Usuario.php'; ?>
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
      Ingredientes
      <small>Control de Ingredientes</small>
    </h1>

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Agregar Ingrediente</h3>
        <!-- /.box-header -->
        <div class="box-body">

          <body>

            <div class="container">
              <div class="card card-container">

                <p class="profile-name-card">

                </p>
                <h2 style="color:#ffffff; text-align:center;">Nuevo Ingrediente</h2>

                <form enctype="multipart/form-data" class="form" action="guardar.php" method="post">

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresa Categoria" name="Categoria">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresa Ingrediente" name="Ingrediente">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresa Cantidad" name="Cantidad">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresa Costo" name="Costo">
                  </div>

                  <div class="form-group">
                    <input type="file" class="form-control" placeholder="selecciona archivo" name="Imagen">
                  </div>


                  <div class="row">
                    <button class="btn btn-success btn-lg btn-block">Aceptar</button>
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