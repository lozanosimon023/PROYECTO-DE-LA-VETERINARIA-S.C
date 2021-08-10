<?php
require_once '../Modelo/conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_productos`(`idProducto`, `idTipoProducto`, `Precio`) VALUES
    (null,'" . $nombre . "', '" . $precio . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "usuario Guardado Correctamente";
} else {
    echo "No fué posible guardar el usuario";
}
