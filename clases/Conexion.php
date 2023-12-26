<?php
class Conexion
{
  private $con;
  
  public function __construct(){
    try{
    $this->con = new PDO('mysql:host=localhost;dbname=Easy_Rec','root','');
      //echo "Si funciona";
    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();
    }
  }
  
  public function getConexion(){
    return $this->con;
  }
}









