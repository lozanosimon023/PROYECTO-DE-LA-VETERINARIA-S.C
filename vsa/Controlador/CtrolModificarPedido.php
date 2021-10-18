<?php
require_once '../Modelo/conexion.php';

$conexion = new PDODB();
$conexion->connect();

$idPedido = $_POST['idPedido'];
$cliente = $_POST['cliente'];
$Direccion = $_POST['Direccion'];
$celular = $_POST['celular'];

$InstruccionSQL = "UPDATE `tbl_pedido` 
                    SET `idCliente` =  $cliente , 
                    `Direccion` =  '" . $Direccion . "' ,
                    `celular` =  $celular 
                    WHERE `idPedido` =  $idPedido ;";

// echo $InstruccionSQL;                    
$resultado = $conexion->executeInstruction($InstruccionSQL);

if ($resultado == true) {
    echo "Pedido actualizado correctamente.";
} else {
    echo "No fue posible actualizar el pedido.";
}
