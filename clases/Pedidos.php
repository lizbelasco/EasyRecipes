<?php

require 'Conexion2.php';

class Pedidos
{
    private $id;
    private $fecha_hora;
    private $mensaje_recibido;
    private $mensaje_enviado;
    private $id_wa;
    private $status;
    private $con;
    private $conexion;

    public function __construct()
    {
        $this->con = new Conexion();
        $this->conexion = $this->con->getConexion();
    }

    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function getfecha_hora()
    {
        return $this->fecha_hora;
    }

    public function setfecha_hora($fecha_hora)
    {
        $this->fecha_hora = $fecha_hora;
    }

    public function getmensaje_recibido()
    {
        return $this->mensaje_recibido;
    }

    public function setmensaje_recibido($mensaje_recibido)
    {
        $this->mensaje_recibido = $mensaje_recibido;
    }

    public function getmensaje_enviado()
    {
        return $this->mensaje_enviado;
    }

    public function setmensaje_enviado($mensaje_enviado)
    {
        $this->mensaje_enviado = $mensaje_enviado;
    }
    public function getid_wa()
    {
        return $this->id_wa;
    }
    public function setid_wa($id_wa)
    {
        $this->id_wa = $id_wa;
    }

    public function getstatus()
    {
        return $this->status;
    }

    public function setstatus($status)
    {
        $this->status = $status;
    }


    public function listar()
    {
        try {
            $sql = "SELECT * FROM registro WHERE status IS NULL";

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
            $sql = "SELECT * FROM registro WHERE id = $this->id";

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
            $sql = "DELETE FROM registro WHERE id = $this->id";

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

            $sql = "UPDATE registro SET status = '$this->status' WHERE id = $this->id";
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
            $sql = "INSERT INTO registro VALUES
        (null,
        '$this->fecha_hora','$this->mensaje_recibido','$this->mensaje_enviado','$this->id_wa')";

            echo "<br>$sql";

            $consulta =
                $this->conexion->prepare($sql);

            $consulta->execute();
        } catch (PDOException $ex) {
            echo "Error: " . $ex->getMessage();
        }
    }
}
