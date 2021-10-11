
<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idCitas = $_POST['idCitas'];

$InstruccionSQL = "DELETE FROM tbl_citas WHERE idCita = " . $idCitas;
$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Cita eliminada correctamente.";
} else {
    echo "No fue posible eliminar la cita.";
}
