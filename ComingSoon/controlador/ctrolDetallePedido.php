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
            listarComboProductos();
        break;
    case 'e':
        eliminar();
        break;
}

function eliminar()
{
    $conexion = new PDODB();
    $conexion->connect();

    $idDetallepedido = $_POST['x'];

    $InstruccionSQL = "DELETE FROM detallepedido WHERE idDetallepedido = ".$idDetallepedido;

    $resultado = $conexion->executeInstruction($InstruccionSQL);
    
    if ($resultado == true) {
        echo "Detalle pedido eliminado correctamente.";
    } else {
        echo "No fue posible eliminar el Detalle pedido.";
    }
}
function listar(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM DetallePedido";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<tr>
                    <th scope="row">'.$value['idDetallepedido'].'</th>
                    <td> <span class="Cantidad">'.$value['Cantidad'].'</span> </td>
                    <td> <span class="Subtotal">'.$value['Subtotal'].'</span> </td> 
                    <td>
                    <a href="#" class="btn btn-success d-block">Modificar datos</a>
                    </td>
                    <td>
                    <input type="button" class="btn btn-danger" onclick="eliminarDetallePedido('.$value['idDetallepedido'].')" value="Eliminar">
                    </td>
                </tr>';
    }

}

function guardar()
{
   
    $Cantidad = $_POST['Cantidad'];
    $Subtotal = $_POST['Subtotal'];
    $Producto = $_POST['producto'];
    $Pedido = $_POST['pedido'];
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "INSERT INTO `detallepedido` (`idDetallePedido`, `idPedido`,`idProducto`, `Cantidad`, `Subtotal`) VALUES 
(NULL, '" . $Pedido . "', '" . $Producto . "', '" . $Cantidad . "','" . $Subtotal . "');";
    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Datos del Detalle Pedido Guardado Correctamente";
    } else {
        echo "No fué posible guardar los datos del Detalle Pedido";
    }
}
