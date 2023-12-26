<?php

require_once '../clases/Recetas.php';

$rec = new Recetas();



$Nombre = $_POST['Nombre'];
$Ingredientes = $_POST['Ingredientes'];
$Descripcion    = $_POST['Descripcion'];
$Imagen = $_FILES['Imagen']['name'];
move_uploaded_file($_FILES['Imagen']['tmp_name'],$ruta.$Imagen);

$rec->setNombre($Nombre);
$rec->setIngredientes($Ingredientes);
$rec->setDescripcion($Descripcion);
$rec->setImagen($Imagen);

$rec->guardar();

header('Location: listar.php');

?>