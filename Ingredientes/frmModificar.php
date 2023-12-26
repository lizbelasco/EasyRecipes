<?php

require_once '../clases/Ingredientes.php';
$ing = new Ingredientes();
$id = $_GET['id'];
$ing->setIdIngrediente($id);
$resultado = $ing->listarUno();


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
          <h3 class="box-title">Modificar Ingrediente</h3>
            <!-- /.box-header -->
            <div class="box-body">

<body>
  <div class="container">
    <div class="card card-container">
      
      <p class="profile-name-card">
        
      </p>
      <h2 style="color:#ffffff; text-align:center;">Formulario de Modificar</h2>
      <form class="form" action="modificar.php" method="post" enctype="multipart/form-data">

      <?php foreach($resultado as $r): ?>
    <input type="hidden" class="form-control" name="idIngrediente" value="<?=$r['idIngrediente'];?>">

       <input type="text" class="form-control" placeholder="Ingrediente" name="Ingrediente"  autofocus
       value="<?=$r['Ingrediente'];?>">

       <input type="text" class="form-control" placeholder="Cantidad" name="Cantidad" 
       value="<?=$r['Cantidad'];?>">

       <input type="number" class="form-control" placeholder="Costo" name="Costo" 
       value="<?=$r['Costo'];?>">

       <input type="file" class="form-control" placeholder="Imagen" name="Imagen" 
       value="<?=$r['Imagen'];?>">

        <?php endforeach;?>

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
</body>
