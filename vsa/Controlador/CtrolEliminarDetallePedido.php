<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idDetallePed = $_POST['idDetallePed'];

$InstruccionSQL = "DELETE FROM tbl_detalle_pedido WHERE idDetallePed = " . $idDetallePed;
$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Produco eliminado correctamente.";
} else {
    echo "No fue posible eliminar el produco.";
}
