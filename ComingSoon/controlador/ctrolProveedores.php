<?php
require_once '../modelo/conexion.php';


switch ($_POST['metodo']) {
    case 'g':
        guardar();
        break;
    case 'l':
        listar();
        break;
    case 'lc':
        listarCombo();
        break;
    case 'e':
        eliminar();
        break;

}
function eliminar()
{
    $conexion = new PDODB();
    $conexion->connect();

    $idProveedor = $_POST['x'];

    $InstruccionSQL = "DELETE FROM proveedores WHERE idProveedor = ".$idProveedor;

    $resultado = $conexion->executeInstruction($InstruccionSQL);
    if ($resultado == true) {
        echo "Proveedor eliminado correctamente.";
    } else {
        echo "No fue posible eliminar el Proveedor.";
    }
}
function listar(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM Proveedores";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<tr>
                    <th scope="row">'.$value['idProveedor'].'</th>
                    <td> <span class="Nombre">'.$value['Nombre'].'</span> </td>
                    <td> <span class="Telefono">'.$value['Telefono'].'</span> </td>
                    <td><span class="Correo">'.$value['Correo'].'</span></td>
                    <td><span class="Ciudad">'.$value['Ciudad'].'</span></td>
                    <td>
                    <a href="#" class="btn btn-success d-block">Modificar datos</a>
                    </td>
                    <td>
                    <input type="button" class="btn btn-danger" onclick="eliminarProveedores('.$value['idProveedor'].')" value="Eliminar">
                    </td>
                </tr>';
    }

}

function listarCombo(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT idProveedor, concat(Nombre,' - ',ciudad) nombreP FROM `proveedores`";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<option value="'.$value['idProveedor'].'">'.$value['nombreP'].'</option>';
    }
}

function guardar()
{
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Ciudad = $_POST['Ciudad'];
   ;

    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "INSERT INTO `proveedores` (`idProveedor`, `Nombre`, `Telefono`, `Correo`, `Ciudad`) VALUES 
(NULL, '" . $Nombre . "', '" . $Telefono . "', '" . $Correo . "', '" . $Ciudad . "');";

    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Datos de Proveedor Guardado Correctamente";
    } else {
        echo "No fué posible guardar los datos del Proveedor";
    }
}
