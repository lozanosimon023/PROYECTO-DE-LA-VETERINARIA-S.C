<?php
require '../../DataBase/conexion.php';

$id = $_GET['id'];

$eliminar = "DELETE FROM tbl_usuarios WHERE id = $id;";

$query = mysqli_query($conexion, $eliminar);

if ($query) {
    header('Location: http://localhost/AdminLTE-3.1.0/MenuAdministrador.php#');
} else {
    echo "Error";
}
