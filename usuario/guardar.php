<?php

require_once '../clases/Usuario.php';

$usu = new Usuario();

$ruta = "../images/usuario";

$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$Foto = $_FILES['Foto']['name'];
move_uploaded_file($_FILES['Foto']['tmp_name'],$ruta.$Foto);
$Nivel = $_POST['Nivel'];

$usu->setCorreo($Correo);
$usu->setContrasena($Contrasena);
$usu->setFoto($Foto);
$usu->setNivel($Nivel);

$usu->guardar();

header('Location: listar.php');

?>