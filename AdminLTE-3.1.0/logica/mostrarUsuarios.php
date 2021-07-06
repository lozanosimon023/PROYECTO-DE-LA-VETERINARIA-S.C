<?php
$query = "SELECT id, nombre, apellido, correo, edad, celular FROM `tbl_usuarios`";
$usuarios = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_assoc($usuarios)) {
?>
    <tr>
        <th scope="row"><?php echo $row["id"] ?></th>
        <td><?php echo $row["nombre"] ?></td>
        <td><?php echo $row["apellido"] ?></td>
        <td><?php echo $row["correo"] ?></td>
        <td><?php echo $row["edad"] ?></td>
        <td><?php echo $row["celular"] ?></td>
        <td>
            <a href="./logica/eliminarUsuario.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Eliminar</a>
        </td>
        <td>
            <button type="button" class="btn btn btn-warning">Modificar</button>
        </td>
    </tr>
<?php } ?>