<?php
require_once '../Modelo/conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$idTipoProducto = $_POST['tipo_producto'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_productos`(`idProducto`, `idTipoProducto`, `nombre`, `Precio`) VALUES 
    (null, '" . $idTipoProducto . "','" . $nombre . "', '" . $precio . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Producto Guardado Correctamente";
} else {
    echo "No fué posible guardar el producto";
}
