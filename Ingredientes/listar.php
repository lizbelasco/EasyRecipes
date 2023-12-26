<?php require_once '../Clases/Ingredientes.php'; ?>
<?php
$ing = new Ingredientes();
$resultado = $ing->listar();
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
  </section>

  <!-- Main content -->


  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Ingredientes</h3>
        <a href="nuevo.php" button type="button" class="btn btn-success glyphicon glyphicon-plus pull-right"></button><small>Agregar</small></a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">

          <thead>
            <tr>
              <th>idIngrediente</th>
              <th>Categoria</th>
              <th>Ingrediente</th>
              <th>Cantidad</th>
              <th>Costo</th>
              <th>Imagen</th>
              <th>Modificar</th>
              <th>Borrar</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($resultado as $r) : ?>
              <tr>
                <td><?php echo $r['idIngrediente']; ?></td>
                <td><?php echo $r['Categoria']; ?></td>
                <td><?php echo $r['Ingrediente']; ?></td>
                <td><?php echo $r['Cantidad']; ?></td>
                <td><?php echo $r['Costo']; ?></td>
                <td>
                  <img src="<?= $servidor; ?>images/ingrediente/<?= $r['Imagen']; ?>" class="image-ingrediente" alt="ingrediente-Image" style="height: 60px;">
                </td>
                <td><a href="frmModificar.php?id=<?= $r['idIngrediente']; ?>" class="frmModificar btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="borrar.php?id=<?= $r['idIngrediente']; ?>" onClick="return confirm('¿Seguro que deseas eliminar?');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
              </tr>
            <?php
            endforeach;
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th>idIngrediente</th>
              <th>Categoria</th>
              <th>Ingrediente</th>
              <th>Cantidad</th>
              <th>Costo</th>
              <th>Imagen</th>
              <th>Modificar</th>
              <th>Borrar</th>
            </tr>
          </tfoot>
        </table>
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