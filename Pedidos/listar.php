<?php
include_once '../template/head.php';
include_once '../template/header.php';
include_once '../template/aside.php';
require_once '../Clases/Pedidos.php';
?>

<?php
$rec = new Pedidos();
$resultado = $rec->listar();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pedidos de Comida
      <small>Pedidos</small>
      <?php
      echo ("<meta http-equiv='refresh' content='15'>");
      ?>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Aqui se muestran las recetas disponibles</h3>
        <a href="nuevo.php?id=<?= $r['id']; ?>" class="nuevo btn btn-success pull-right"><span class="glyphicon glyphicon-plus">Nuevo</a>
        <a href="<?= $servidor; ?>mensaje_recibido/listar.php" class="btn btn-success glyphicon glyphicon-apple pull-right"></button></a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <!-- <th>id</th> -->
              <th>id</th>
              <th>fecha_hora</th>
              <th>Pedido</th>
              <th>telefono_wa</th>
              <th>Pedido Listo</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($resultado as $r) : ?>
              <tr>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['fecha_hora']; ?></td>
                <td><?php echo $r['mensaje_recibido']; ?></td>
                <td><?php echo $r['telefono_wa']; ?></td>
                <td><a href="borrar.php?id=<?= $r['id']; ?>" onClick="return confirm('¿Seguro que deseas terminar con el pedido?');" class="frmModificar btn btn-success"><span class="glyphicon glyphicon-ok"></span></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <!--  <th>id</th> -->
              <th>id</th>
              <th>fecha_hora</th>
              <th>Pedido</th>
              <th>telefono_wa</th>
              <th>Pedido Listo</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>

<?php include_once '../template/footer.php'; ?>