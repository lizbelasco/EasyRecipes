<?php
require_once '../Clases/Pedidos.php';

$rec = new Pedidos();

$id = $_GET['id'];
$status = "Terminado";

$rec->setid($id);
$rec->setstatus($status);

$rec->modificar();

header('Location: listar.php');