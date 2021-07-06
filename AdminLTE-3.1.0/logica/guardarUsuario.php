<?php
require '../../DataBase/conexion.php';

$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$correo = $_POST['CorreoElectronico'];
$edad = $_POST['Edad'];
$celular = $_POST['telefono'];

$insertar = "INSERT INTO tbl_usuarios VALUES ('','$nombre', '$apellido', '$correo', $edad, '$celular')";

$query = mysqli_query($conexion, $insertar);

if ($query) {
    header('Location: http://localhost/AdminLTE-3.1.0/MenuAdministrador.php#');
} else {
    echo "Error";
}
