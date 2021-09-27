<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idPedido = $_POST['idPedido'];

$InstruccionSQL = "DELETE FROM tbl_pedido WHERE idPedido = " . $idPedido;
$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Pedido eliminado correctamente.";
} else {
    echo "No fue posible eliminar el pedido.";
}
