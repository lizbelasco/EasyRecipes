<?php
require_once '../Clases/Usuario.php';

$usu = new Usuario();

$id = $_GET['id'];

$usu->setIdUsuario($id);
$usu->borrar();

header('Location: listar.php');