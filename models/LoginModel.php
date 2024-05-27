<?php

class LoginModel {
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function loginUser($correo, $contrasena) {
        $sql = "SELECT * FROM usuarios WHERE usu_email = :correo AND usu_pass = :contrasena";
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute(array(':correo' => $correo, ':contrasena' => $contrasena));
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            exit;
        }
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($result) {
            $_SESSION['usuario'] = $result['usu_nombre'];
            return true;
        } else {
            return false;
        }
    }

    public function set_names() {
        $this->dbh->query("SET NAMES 'utf8'");
    }
}




?>


