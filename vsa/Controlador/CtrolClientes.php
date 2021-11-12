<?php
require_once '../Modelo/conexion.php';

$nombres = $_POST['nombres'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_cliente`(`id`, `Nombre`, `Celular`, `Correo`, `Contrasena`) VALUES
    (null,'" . $nombres . "', '" . $celular . "', '" . $email . "','" . $contrasena . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Cliente Guardado Correctamente";
} else {
    echo "No fué posible guardar el Cliente";
}
