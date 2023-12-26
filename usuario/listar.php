<?php include_once '../template/head.php'; ?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/aside.php'; ?>
<?php require_once '../Clases/Usuario.php'; ?>
<?php
$usu = new Usuario();
$resultado = $usu->listar();
?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Usuarios
      <small>Control de Usuario</small>
    </h1>
    <ol class="breadcrumb">
      <a href="nuevo.php" <button type="button" class="btn btn-success glyphicon glyphicon-plus pull-right"></button></a>

    </ol>
  </section>

  <!-- Main content -->


  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Sesiones Disponibles</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>id Usuario</th>
              <th>Correo</th>
              <th>Fotografia</th>
              <th>Modificar</th>
              <th>borrar</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($resultado as $r) : ?>
              <tr>
                <td><?php echo $r['idUsuario']; ?></td>
                <td><?php echo $r['Correo']; ?></td>

                <td><img src="<?= $servidor; ?>images/Usuario/<?= $r['Foto']; ?>" class="image-Usuarios"></td>
                <td><a href="frmModificar.php?id=<?= $r['idUsuario']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="borrar.php?id=<?= $r['idUsuario']; ?>" onClick="return confirm('¿Seguro que quieres eliminar?');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
              </tr>
            <?php
            endforeach;

            ?>
            <tr>


            </tr>
            <tr>
          </tbody>
          <tfoot>
            <tr>
              <th>id Usuario</th>
              <th>Correo</th>
              <th>Fotografia</th>
              <th>Modificar</th>
              <th>borrar</th>
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