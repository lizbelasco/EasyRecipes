<?php
session_start();

require_once '../Clases/Usuario.php';

$usu = new Usuario();

$Correo     = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];

$usu->setCorreo($Correo);
$usu->setContrasena($Contrasena);

$resultado = $usu->login();

if($resultado >0){
    $usu->setCorreo($Correo);
    $resultado = $usu->listarUsuario();

    
    foreach($resultado as $r):
    $_SESSION['login'] = $Correo;
    $_SESSION['Foto'] = $r['Foto'];
    $_SESSION['Nivel'] = $r['Nivel'];
    endforeach;
    
    header('Location:../index.php');

}else{
    header('Location:../login.php');
}





