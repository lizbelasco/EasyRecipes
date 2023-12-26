<?php
 session_start();

$ruta_servidor = $_SERVER['DOCUMENT_ROOT'].'/RE_Cal/';
$servidor = 'http://'.$_SERVER['HTTP_HOST'].'/RE_Cal/';

if(!isset($_SESSION['login'])){
 header('Location: '.$servidor.'login.php');
   }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Easy Recipes | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=$servidor;?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$servidor;?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$servidor;?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$servidor;?>dist/css/AdminLTE.css">
  <!-- AdminLTE Skins.-->
  <link rel="stylesheet" href="<?=$servidor;?>dist/css/skins/_all-skins.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">