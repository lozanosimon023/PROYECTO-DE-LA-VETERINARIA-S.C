<?php
require_once '../Modelo/conexion.php';

$conexion = new PDODB();
$conexion->connect();

$idProducto = $_POST['idProducto'];
$nombre = $_POST['nombre'];
$Precio = $_POST['Precio'];
$Tipo = $_POST['idTipoProducto'];

$InstruccionSQL = "UPDATE `tbl_productos` 
                    SET `nombre` = '" . $nombre . "', 
                    `Precio` =  $Precio ,
                    `idTipoProducto` =  $Tipo 
                    WHERE `idProducto` =  $idProducto ;";
$resultado = $conexion->executeInstruction($InstruccionSQL);

if ($resultado == true) {
    echo "Producto actualizado correctamente.";
} else {
    echo "No fue posible actualizar el producto.";
}
