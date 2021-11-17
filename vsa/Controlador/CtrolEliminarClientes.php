<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idCliente = $_POST['idCliente'];

$InstruccionSQL = "DELETE FROM tbl_Cliente WHERE idCliente = " . $idCliente;
$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Cliente eliminado correctamente.";
} else {
    echo "No fue posible eliminar el cliente.";
}
