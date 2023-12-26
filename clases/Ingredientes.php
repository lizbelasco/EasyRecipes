<?php

require 'Conexion.php';

class Ingredientes
{
  private $idIngrediente;
  private $Categoria;
  private $Ingrediente;
  private $Cantidad;
  private $Costo;
  private $Imagen;
  private $con;
  private $conexion;

  public function __construct()
  {
    $this->con = new Conexion();
    $this->conexion = $this->con->getConexion();
  }

  public function getidIngrediente()
  {
    return $this->idIngrediente;
  }

  public function setidIngrediente($idIngrediente)
  {
    $this->idIngrediente = $idIngrediente;
  }

  public function getCategoria()
  {
    return $this->idIngrediente;
  }

  public function setCategoria($Categoria)
  {
    $this->Categoria = $Categoria;
  }

  public function getIngrediente()
  {
    return $this->Ingrediente;
  }

  public function setIngrediente($Ingrediente)
  {
    $this->Ingrediente = $Ingrediente;
  }

  public function getCantidad()
  {
    return $this->Cantidad;
  }

  public function setCantidad($Cantidad)
  {
    $this->Cantidad = $Cantidad;
  }

  public function getCosto()
  {
    return $this->Costo;
  }

  public function setCosto($Costo)
  {
    $this->Costo = $Costo;
  }

  public function getImagen()
  {
    return $this->Imagen;
  }

  public function setImagen($Imagen)
  {
    $this->Imagen = $Imagen;
  }

  public function listar()
  {
    try {
      $sql = "SELECT idIngrediente, Categoria, Ingrediente, Cantidad, Costo, Imagen FROM Ingredientes";

      $consulta = $this->conexion->prepare($sql);

      $consulta->execute();
      $resultado = $consulta->fetchAll();

      return $resultado;
    } catch (PDOException $ex) {
      echo "Error: " . $ex->getMessage();
    }
  }
  public function listarUno()
  {
    try {
      $sql = "SELECT * FROM Ingredientes WHERE idIngrediente = $this->idIngrediente";

      $consulta = $this->conexion->prepare($sql);

      $consulta->execute();
      $resultado = $consulta->fetchAll();

      return $resultado;
    } catch (PDOException $ex) {
      echo "Error: " . $ex->getMessage();
    }
  }

  public function borrar()
  {
    try {
      $sql = "DELETE FROM Ingredientes WHERE idIngrediente = $this->idIngrediente";

      $consulta = $this->conexion->prepare($sql);

      $consulta->execute();
      $resultado = $consulta->fetchAll();

      return $resultado;
    } catch (PDOException $ex) {
      echo "Error: " . $ex->getMessage();
    }
  }

  public function modificar()
  {
    try {
      $sql = "UPDATE Ingredientes SET Categoria = '$this->Categoria', Ingrediente = '$this->Ingrediente', Cantidad = '$this->Cantidad', Costo = '$this->Costo', Imagen = '$this->Imagen' WHERE idIngrediente = $this->idIngrediente";
      echo $sql;
      $consulta = $this->conexion->prepare($sql);
      $consulta->execute();
    } catch (PDOException $ex) {
      echo "Error: " . $ex->getMessage();
    }
  }
  public function guardar()
  {
    try {
      $sql = "INSERT INTO Ingredientes VALUES (null,'$this->Categoria','$this->Ingrediente','$this->Cantidad',$this->Costo,'$this->Imagen')";

      echo "<br>$sql";

      $consulta =
        $this->conexion->prepare($sql);

      $consulta->execute();
    } catch (PDOException $ex) {
      echo "Error: " . $ex->getMessage();
    }
  }
}
