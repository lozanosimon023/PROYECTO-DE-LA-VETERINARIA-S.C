<?php
require_once '../Modelo/conexion.php';

$nombrePaciente = $_POST['nombrePaciente'];
$nombreCliente = $_POST['nombreCliente'];
$tipoConsulta = $_POST['tipoConsulta'];
$fecha_Hora = $_POST['fecha_Hora'];
$estado = $_POST['estado'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_citas`(`idCitas`, `idPaciente`, `idCliente`, `idTipoConsulta`, `Fecha_Hora`, `Estado`) VALUES 
    (null,'" . $nombrePaciente . "', '" . $nombreCliente . "', '" . $tipoConsulta . "'," . $fecha_Hora . ",'" . $estado . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Cita Guardada Correctamente";
} else {
    echo "No fué posible guardar la Cita";
}
