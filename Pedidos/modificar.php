<?php

require_once '../Clases/Pedidos.php';

$rec = new Pedidos();

$id = $_POST['id'];
$status = $_POST['status'];

$rec->setid($id);
$rec->setstatus($status);


$rec->modificar();


header('Location: listar.php');
