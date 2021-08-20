<?php
require_once '../Modelo/conexion.php';

$cliente = $_POST['cliente'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$total = $_POST['total'];

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
