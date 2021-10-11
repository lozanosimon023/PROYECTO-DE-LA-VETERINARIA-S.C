<?php
require_once '../modelo/conexion.php';


switch ($_POST['metodo']) {
    case 'g':
        guardar();
        break;
    case 'l':
        listar();
        break;

}

function listar(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM domicilios";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<tr>
                    <th scope="row">'.$value['idDomicilio'].'</th>
                    <td> <span class="Telefono">'.$value['Telefono'].'</span> </td>
                    <td> <span class="Direccion">'.$value['Direccion'].'</span> </td>
                    <td> <span class="Ciudad">'.$value['Ciudad'].'</span> </td>
                    <td><span class="Barrio">'.$value['Barrio'].'</span></td>
                    <td><span class="Edad">'.$value['Edad'].'</span></td>
                    <td><span class="Nombre_R">'.$value['Nombre_R'].'</span></td>
                    <td><span class="Nombre_D">'.$value['Nombre_D'].'</span></td>
                    <td>
                    <a href="#" class="btn btn-success d-block">Modificar datos</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-danger d-block">Eliminar</a>
                    </td>
                </tr>';
    }

}

function guardar()
{
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Ciudad = $_POST['Ciudad'];
    $Barrio = $_POST['Barrio'];
    $Edad = $_POST['Edad'];
    $Nombre_R = $_POST['Nombre_R'];
    $Nombre_D = $_POST['Nombre_D'];

    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "INSERT INTO `domicilios` (`idDomicilio`, `Telefono`, `Direccion`, `Ciudad`, `Barrio`, `Edad`, `Nombre_R`, `idPedido`, `Nombre_D`) VALUES 
(NULL, '" . $Telefono . "', '" . $Direccion . "', '" . $Ciudad . "', '" . $Barrio . "', '" . $Edad . "', '" . $Nombre_R . "', '" . $Nombre_D . "');";

    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Datos de domicilios Guardado Correctamente";
    } else {
        echo "No fué posible guardar los datos del domicilio";
    }
}
