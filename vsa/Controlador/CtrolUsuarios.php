<?php
require_once '../Modelo/conexion.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_usuarios`(`id`, `nombre`, `apellido`, `correo`, `Contrasena`) VALUES
    (null,'" . $nombres . "', '" . $apellidos . "', '" . $email . "','" . $contrasena . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "usuario Guardado Correctamente";
} else {
    echo "No fué posible guardar el usuario";
}
