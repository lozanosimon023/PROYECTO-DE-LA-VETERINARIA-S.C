<?php
require_once '../Modelo/conexion.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$cel = $_POST['cel'];
$contrasena = $_POST['contraseña'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_usuarios`(`id`, `nombre`, `apellido`, `correo`, `edad`, `celular`, `Contrasena`) VALUES
    (null,'" . $nombres . "', '" . $apellidos . "', '" . $email . "'," . $edad . ",'" . $cel . "','" . $contrasena . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "usuario Guardado Correctamente";
} else {
    echo "No fué posible guardar el usuario";
}
