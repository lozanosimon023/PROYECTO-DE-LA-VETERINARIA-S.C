<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idPedido = $_POST['idPedido'];

$InstruccionSQL = "DELETE FROM tbl_detalle_pedido WHERE idPedido = " . $idPedido;
$resultado = $conexion->executeInstruction($InstruccionSQL);

if ($resultado == true) {
    $InstruccionSQL2 = "DELETE FROM tbl_pedido WHERE idPedido = " . $idPedido;
    $resultado2 = $conexion->executeInstruction($InstruccionSQL2);
    if ($resultado2 == true) {
        echo "Pedido eliminado correctamente.";
    } else {
        echo "No fue posible eliminar el pedido.";
    }
} else {
    echo "No fue posible eliminar el detalle del pedido.";
}
