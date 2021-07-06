<?php
require '../../DataBase/conexion.php';

$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$correo = $_POST['CorreoElectronico'];
$edad = $_POST['Edad'];
$celular = $_POST['telefono'];

$insertar = "INSERT INTO tbl_usuarios VALUES ('','$nombre', '$apellido', '$correo', $edad, '$celular')";

echo mysqli_query($conexion, $insertar);
