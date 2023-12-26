<?php

require_once '../Clases/Ingredientes.php';

$ing = new Ingredientes();

$id = $_POST['idIngrediente'];
$Ingrediente = $_POST['Ingrediente'];
$Cantidad =$_POST['Cantidad'];
$Costo =$_POST['Costo'];
$Imagen= $_FILES['Imagen']['name'];


$ing->setidIngrediente($id);
$ing->setIngrediente($Ingrediente);
$ing->setCantidad($Cantidad);
$ing->setCosto($Costo);
$ing->setImagen($Imagen);


$ing->modificar();


header('Location: listar.php');