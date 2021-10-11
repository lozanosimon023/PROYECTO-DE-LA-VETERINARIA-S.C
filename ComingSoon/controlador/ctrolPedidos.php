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
        listarComboPedido();
        break;

}

function listar(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM Pedidos";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<tr>
                    <th scope="row">'.$value['idPedido'].'</th>
                    <td> <span class="Fecha">'.$value['Fecha'].'</span> </td>
                    <td> <span class="Total">'.$value['Total'].'</span> </td>
                    
                </tr>';
    }

}

function guardar()
{
    $Fecha = $_POST['Fecha'];
    $Total = $_POST['Total'];
    $Cliente = $_POST['cliente'];
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "INSERT INTO `pedidos` (`idPedido`, `idCliente`, `Fecha`, `Total`) VALUES 
(NULL, '" . $Cliente . "', '" . $Fecha . "', '" . $Total . "');";

    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Datos del pedido Guardado Correctamente";
    } else {
        echo "No fué posible guardar los datos del pedido";
    }
}


function listarComboPedido(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "select p.idPedido, c.Usuario, p.Fecha from pedidos p
    inner join clientes c on(p.idCliente = c.idCliente)
    order by p.idPedido desc";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<option value="'.$value['idPedido'].'">'.$value['Usuario'].' - '.$value['Fecha'].'</option>';
    }
}