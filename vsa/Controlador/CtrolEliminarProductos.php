<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idProducto = $_POST['idProducto'];

$InstruccionSQL = "DELETE FROM tbl_productos WHERE id = " . $idProducto;
$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Usuario eliminado correctamente.";
} else {
    echo "No fue posible eliminar el usuario.";
}
