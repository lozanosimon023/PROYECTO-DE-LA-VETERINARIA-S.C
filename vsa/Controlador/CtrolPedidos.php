<?php
require_once '../Modelo/conexion.php';

$cliente = $_POST['cliente'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$total = 0;

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_pedido`(`idPedido`, `idCliente`, `Direccion`, `Celular`, `Total`) VALUES
    (null, '" . $cliente . "','" . $direccion . "', '" . $celular . "','" . $total . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Pedido Guardado Correctamente";
} else {
    echo "No fué posible guardar el Pedido";
}
