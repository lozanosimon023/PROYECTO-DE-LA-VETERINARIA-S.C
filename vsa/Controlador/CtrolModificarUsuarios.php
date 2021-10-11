<?php
require_once '../Modelo/conexion.php';

$conexion = new PDODB();
$conexion->connect();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$Contrasena = $_POST['Contrasena'];

$InstruccionSQL = "UPDATE `tbl_usuarios` 
                    SET `nombre` = '" . $nombre . "', 
                    `apellido` = '" . $apellido . "', 
                    `correo` = '" . $correo . "', 
                    `Contrasena` = '" . $Contrasena . "'
                    WHERE `id` = '" . $id . "';";

$resultado = $conexion->executeInstruction($InstruccionSQL);

if ($resultado == true) {
    echo "Usuario actualizado correctamente.";
} else {
    echo "No fue posible actualizar el usuario.";
}
