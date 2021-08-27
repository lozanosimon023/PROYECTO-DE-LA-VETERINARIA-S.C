<?php

require_once '../Modelo/conexion.php';

$Usuario = $_POST['username'];
$contrasena = $_POST['password'];

$conexion = new PDODB();
$conexion->connect();

$instruccionSQL = "SELECT * FROM tbl_usuarios
                     WHERE correo = '" . $Usuario . "'
                     and Contrasena = '" . $contrasena . "'";

$resultado = $conexion->login($instruccionSQL);

if ($resultado != false) {
    session_start();
    foreach ($resultado as $key => $value) {
        $_SESSION['codU'] = $value['id'];
        $_SESSION['nombreU'] = $value['nombre'];
        $_SESSION['apellidoU'] = $value['apellido'];
    }
    header("location: ../Vista/MenuAdministrador.php");
} else {
    header("Location: ../Vista/index.php");
}
