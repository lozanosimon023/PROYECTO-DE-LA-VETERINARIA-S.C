<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT * FROM tbl_usuarios";
$listado = $conexion->executeInstruction($consulta);
foreach ($listado as $key => $value) {
    echo '<tr>
        <td scope="col">' . $value['id'] . '</td>
        <td scope="col">' . $value['nombre'] . '</td>
        <td scope="col">' . $value['apellido'] . '</td>
        <td scope="col">' . $value['correo'] . '</td>
        <td scope="col">' . $value['Contrasena'] . '</td>
        <td scope="col"><input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminarUsuario()"></td>
        <td scope="col"><input class="btn btn-warning" type="button" value="Modificar" onclick="modificarUsuario()"></td>
    </tr>';
}
