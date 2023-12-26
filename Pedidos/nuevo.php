<?php require_once '../Clases/Recetas.php';?>
<?php
$rec = new Recetas();
$resultado = $rec->listar();


?>


<?php include_once '../template/head.php'; ?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/aside.php'; ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Recetas
        <small>Control de Rectas</small>
      </h1>
      
    <div class="box">
            <div class="box-header">
          <h3 class="box-title">Agregar Receta</h3>
            <!-- /.box-header -->
            <div class="box-body">

<body>

  <div class="container">
    <div class="card card-container">
      
      <p class="profile-name-card">
        
      </p>
      <h2 style="color:#ffffff; text-align:center;">Nueva Receta</h2>

      <form enctype ="multipart/form-data" class="form" action="guardar.php" method="post">
      
        <div class="form-group">
       <input type="text" class="form-control" placeholder="Ingresa NombreReceta" name="Nombre">
       </div>

        <div class="form-group">
       <input type="text" class="form-control" placeholder="Ingresa Ingredientes" name="Ingredientes">
      </div>

      <div class="form-group">
       <input type="text" class="form-control" placeholder="Ingresa Descripcion" name="Descripcion">
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