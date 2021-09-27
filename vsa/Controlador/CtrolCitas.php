<?php
require_once '../Modelo/conexion.php';

$Paciente = $_POST['Paciente'];
$Cliente = $_POST['Cliente'];
$TipoConsulta = $_POST['TipoConsulta'];
$Fecha_Hora = $_POST['Fecha_Hora'];
$Estado = $_POST['Estado'];

$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_citas`(`idCitas`, `idPaciente`, `idCliente`, `idTipoConsulta`, `Fecha_Hora`, `Estado`) VALUES 
    (null,'" . $Paciente . "', '" . $Cliente . "', '" . $TipoConsulta . "'," . $Fecha_Hora . ",'" . $Estado . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Cita Guardada Correctamente";
} else {
    echo "No fué posible guardar la Cita";
}
