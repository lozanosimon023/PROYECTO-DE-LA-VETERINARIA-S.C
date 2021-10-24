<?php
require_once '../Modelo/conexion.php';

$paciente = $_POST['paciente'];
$cliente = $_POST['cliente'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];


$conexion = new PDODB();

$conexion->connect();

$InstruccionSQL = "INSERT INTO `tbl_paciente`(`idPaciente`, `idCliente`, `NombrePaciente`, `Edad`, `Sexo`) VALUES
    (null , $cliente , '" . $paciente . "', $edad ,'" . $sexo . "');";

$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "paciente guardado correctamente";
} else {
    echo "No fué posible guardar el paciente";
}
