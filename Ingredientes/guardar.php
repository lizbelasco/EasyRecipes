<?php

require_once '../clases/Ingredientes.php';

$ing = new Ingredientes();

$ruta = "../images/ingrediente/";

$Categoria = $_POST['Categoria'];
$Ingrediente = $_POST['Ingrediente'];
$Cantidad    = $_POST['Cantidad'];
$Costo    = $_POST['Costo'];
$Imagen = $_FILES['Imagen']['name'];
move_uploaded_file($_FILES['Imagen']['tmp_name'], $ruta . $Imagen);

$ing->setCategoria($Categoria);
$ing->setIngrediente($Ingrediente);
$ing->setCantidad($Cantidad);
$ing->setCosto($Costo);
$ing->setImagen($Imagen);

$ing->guardar();

header('Location: listar.php');
