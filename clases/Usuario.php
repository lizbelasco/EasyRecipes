<?php

require 'Conexion.php';

class Usuario
{
  private $idUsuario;
  private $Correo;
  private $Contrasena;
  private $Foto;
  private $Nivel;
  private $con;
  private $conexion;
  
  public function __construct(){
    $this->con = new Conexion();
    $this->conexion = $this->con->getConexion(); 
  }
  
  public function getIdUsuario(){
    return $this->idUsuario;
  }
  
  public function setIdUsuario($idUsuario){
    $this->idUsuario = $idUsuario;
  }
  
  public function getCorreo(){
    return $this->Correo;
  }
  
  public function setCorreo($Correo){
    $this->Correo = $Correo;
  }
  
  public function getContrasena(){
    return $this->Contrasena;
  }
  
  public function setContrasena($Contrasena){
    $this->Contrasena = $Contrasena;
  }

  public function getFoto(){
    return $this->Foto;
  }

  public function setFoto($Foto){
    $this->Foto = $Foto;
  }

  public function getNivel(){
    return $this->Nivel;
  }

  public function setNivel($Nivel){
    $this->Nivel = $Nivel;
  }
  
  public function login(){
    try{
      $pass = $this->Contrasena;
      $sql = "SELECT * FROM Usuario WHERE
       Correo = '$this->Correo' AND 
       Contrasena = AES_ENCRYPT('$pass','$this->Correo')";
      echo $sql;
      $consulta = $this->conexion->prepare($sql);
      
      $consulta->execute();
      $resultado = $consulta->fetchAll(); //Aqui esta el error
      
      return $resultado;
      
    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();
    }  
  }

  public function listar(){
    try{
      $sql = "SELECT idUsuario, Correo, AES_DECRYPT(Contrasena,Correo) as Contrasena,Nivel,Foto FROM Usuario";
 
      $consulta = $this->conexion->prepare($sql);
      
      $consulta->execute();
      $resultado = $consulta->fetchAll();
      
      return $resultado;
      
    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();

    }
  }
  public function listarUno(){
    try{
      $sql = "SELECT * FROM Usuario WHERE idUsuario = $this->idUsuario";

      $consulta = $this->conexion->prepare($sql);
      
      $consulta->execute();
      $resultado = $consulta->fetchAll();
      
      return $resultado;
      
    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();

    }
  }

  public function borrar(){
    try{
      $sql = "DELETE FROM Usuario WHERE idUsuario = $this->idUsuario";
      
            $consulta = $this->conexion->prepare($sql);
            
            $consulta->execute();
            $resultado = $consulta->fetchAll();
            
            return $resultado;


    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();
      
    }
  }

  public function modificar(){
    try{
      $pass = $this->Contrasena;
      $sql = "UPDATE Usuario SET Correo = '$this->Correo', Contrasena = '$pass',Foto = '$this->Foto', Nivel = $this->Nivel                                                                                                                                                                        
      WHERE idUsuario = $this->idUsuario";
      
            $consulta = $this->conexion->prepare($sql);
            
            $consulta->execute();

    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();  
  }
  }
  public function guardar(){
    try{
      $pass = $this->Contrasena;
      $sql = "INSERT INTO Usuario VALUES
        (null,
        '$this->Correo',
        AES_ENCRYPT('$this->Contrasena','$this->Correo'),
        '$this->Foto',$this->Nivel)";
      
      echo "<br>$sql";
      
      $consulta = 
        $this->conexion->prepare($sql);
      
      $consulta->execute();
    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();   
    }
  }
  public function listarUsuario(){
    try{
      $sql = "SELECT * FROM Usuario WHERE Correo = '$this->Correo'";

      $consulta = $this->conexion->prepare($sql);
      
      $consulta->execute();
      $resultado = $consulta->fetchAll();
      
      return $resultado;
      
    }catch(PDOException $ex){
      echo "Error: " . $ex->getMessage();
    }
  }
}



































