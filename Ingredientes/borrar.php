<?php
require_once '../Clases/Ingredientes.php';

$ing = new Ingredientes();

$id = $_GET['id'];

$ing->setIdIngrediente($id);
$ing->borrar();

header('Location: listar.php');