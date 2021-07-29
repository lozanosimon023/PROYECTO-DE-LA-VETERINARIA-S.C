<?php
require '../../DataBase/conexion.php';

$id = $_GET['id'];

$eliminar = "DELETE FROM tbl_productos WHERE idProducto = $id;";

$query = mysqli_query($conexion, $eliminar);

if ($query) {
    header('Location: http://localhost/Vista/MenuAdministrador.php#');
} else {
    echo "Error";
}
