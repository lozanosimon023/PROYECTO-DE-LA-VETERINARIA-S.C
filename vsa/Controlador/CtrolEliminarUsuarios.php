<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idusuario = $_POST['idUsuario'];

$InstruccionSQL = "DELETE FROM tbl_usuarios WHERE id = " . $idusuario;
$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Usuario eliminado correctamente.";
} else {
    echo "No fue posible eliminar el usuario.";
}
