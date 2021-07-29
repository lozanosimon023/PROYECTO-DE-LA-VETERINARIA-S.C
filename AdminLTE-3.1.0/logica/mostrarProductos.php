<?php
$query = "SELECT prod.idProducto as idProducto, tprod.tipo as Tipo, prod.Precio as Precio FROM `tbl_productos` prod INNER JOIN tbl_tipo_producto tprod on prod.idTipoProducto = tprod.idTipoProducto";
$usuarios = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_assoc($usuarios)) {
?>
    <tr>
        <th scope="row"><?php echo $row["idProducto"] ?></th>
        <td><?php echo $row["Tipo"] ?></td>
        <td><?php echo $row["Precio"] ?></td>
        <td>
            <a href="../../AdminLTE-3.1.0/logica/eliminarProducto.php?id=<?php echo $row["idProducto"] ?>" class="btn btn-danger">Eliminar</a>
        </td>
        <td>
            <button type="button" class="btn btn btn-warning">Modificar</button>
        </td>
    </tr>
<?php } ?>