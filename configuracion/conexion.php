<?php

class Conectar {
    protected $dbh;

    public function Conexion() {
        try {
            $this->dbh = new PDO("mysql:host=localhost;dbname=proyecto_nicolas", "root", "");
            return $this->dbh;
        } catch (Exception $e) {
            die("¡Error BD!: " . $e->getMessage() . "<br/>");
        }
    }

    public function set_names() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public static function ruta() {
        return "http://localhost/Practica_Proyecto/";
    }
}
?>
