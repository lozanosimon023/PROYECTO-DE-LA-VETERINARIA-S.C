<?php
require_once '../Modelo/conexion.php';

$idPedido = $_POST['idPedido'];
$idProducto = $_POST['idProducto'];
$Cantidad = $_POST['Cantidad'];

$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT Precio FROM `tbl_productos` WHERE idProducto = $idProducto";
$listado = $conexion->executeInstruction($consulta);
$PrecioUnitario = 0;

foreach ($listado as $key => $value) {
    $PrecioUnitario = $value['Precio'];
}

$Total = $PrecioUnitario * $Cantidad;

$InstruccionSQL = "INSERT INTO `tbl_detalle_pedido`(`idDetallePed`, `idPedido`, `idProducto`, `Cantidad`, `Subtotal`) 
                    VALUES (null," . $idPedido . ", " . $idProducto . ", " . $Cantidad . ",'" . $Total . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Producto agregado correctamente";
} else {
    echo "No fué posible agregar el producto";
}
