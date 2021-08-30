<?php
require_once '../Modelo/conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo_producto = $_POST['tipo_producto'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_productos`(`idProducto`, `idTipoProducto`, `nombre`, `Precio`) VALUES 
    (null, '" . $tipo_producto . "','" . $nombre . "', '" . $precio . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Producto Guardado Correctamente";
} else {
    echo "No fué posible guardar el producto";
}
