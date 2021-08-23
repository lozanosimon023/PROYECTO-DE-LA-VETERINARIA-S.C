<?php
require_once '../Modelo/conexion.php';

$nombrePaciente = $_POST['nombrePaciente'];
$nombreCliente = $_POST['nombreCliente'];
$tipoConsulta = $_POST['tipoConsulta'];
$fechayHora = $_POST['fechayHora'];
$estado = $_POST['estado'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_citas`(`idCitas`, `idPaciente`, `idCliente`, `idTipoConsulta`, `Fecha_Hora`, `Estado`) VALUES 
    (null,'" . $nombrePaciente . "', '" . $nombreCliente . "', '" . $tipoConsulta . "'," . $fechayHora . ",'" . $estado . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Cita Guardada Correctamente";
} else {
    echo "No fué posible guardar la Cita";
}
