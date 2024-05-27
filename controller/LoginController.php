<?php
session_start();

require '../configuracion/conexion.php';
require '../models/LoginModel.php';

$correo = isset($_POST['correo']) ? $_POST['correo'] : null;
$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : null;

if (!$correo || !$contraseña) {
    echo "Error: Correo o contraseña vacíos";
    exit;
}

class LoginController {
    private $model;

    public function __construct() {
        $db = new Conectar();
        $this->model = new LoginModel($db->Conexion());
        $this->set_names();
    }

    public function loginUser($correo, $contraseña) {
        return $this->model->loginUser($correo, $contraseña);
    }

    private function set_names() {
        $this->model->set_names();
    }
}

$loginController = new LoginController();

if ($loginController->loginUser($correo, $contraseña)) {
    echo "Login exitoso";
} else {
    echo "Correo y/o contraseña incorrectos";
}

?>

