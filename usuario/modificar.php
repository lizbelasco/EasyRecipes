<?php
session_start();

require_once '../Clases/Usuario.php';

$usu = new Usuario();

$idUsuario = $_POST['idUsuario'];
$Correo = $_POST['Correo'];
$Contrasena =$_POST['Contrasena'];
$Foto = $_FILES['Foto']['name'];
$Nivel =$_POST['Nivel'];

$usu->setidUsuario($idUsuario);
$usu->setCorreo($Correo);
$usu->setContrasena($Contrasena);
$usu->setFoto($Foto);
$usu->setNivel($Nivel);


$usu->modificar();

$_SESSION['Foto']=$Foto;

header('Location: listar.php');


