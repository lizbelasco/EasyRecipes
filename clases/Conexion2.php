<?php
class Conexion
{
    private $con;

    public function __construct()
    {
        try {
            $this->con = new PDO('mysql:host=mysql-aurelia.alwaysdata.net;dbname=aurelia_chat', 'aurelia', '');
            //echo "Si funciona";
        } catch (PDOException $ex) {
            echo "Error: " . $ex->getMessage();
        }
    }

    public function getConexion()
    {
        return $this->con;
    }
}
