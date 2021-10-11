<?php
require_once '../modelo/conexion.php';


switch ($_POST['metodo']) {
    case 'g':
        guardar();
        break;
    case 'l':
        listar();
        break;
     case 'e':
            eliminar();
        break;
    

}
function eliminar()
{
    $conexion = new PDODB();
    $conexion->connect();

    $id_Administrador = $_POST['x'];

    $InstruccionSQL = "DELETE FROM administradores WHERE id_Administrador = ".$id_Administrador;

    $resultado = $conexion->executeInstruction($InstruccionSQL);
    if ($resultado == true) {
        echo "Administrador eliminado correctamente.";
    } else {
        echo "No fue posible eliminar el Administrador.";
    }
}
function listar(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM Administradores";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<tr>
                    <th scope="row">'.$value['id_Administrador'].'</th>
                    <td> <span class="Usuario">'.$value['Usuario'].'</span> </td>
                    <td> <span class="Contrasena">'.$value['Contrasena'].'</span> </td>
                    <td><span class="Nombre">'.$value['Nombre'].'</span></td>
                    <td><span class="Telefono">'.$value['Telefono'].'</span></td>
                    <td><span class="Correo">'.$value['Correo'].'</span></td>

                    
                    <td>
                    <input type="button" class="btn btn-danger" onclick="eliminarAdministradores('.$value['id_Administrador'].')" value="Eliminar">
                    </td>
                </tr>';
    }

}

function guardar()
{
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];

    

    ;

    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "INSERT INTO `administradores` (`id_Administrador`, `Usuario`, `Contrasena`, `Nombre`, `Telefono`, `Correo`) VALUES 
(NULL, '" . $Usuario . "', '" . $Contrasena . "', '" . $Nombre . "', '" . $Telefono . "', '" . $Correo . "');";

    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Datos de adminitrador Guardado Correctamente";
    } else {
        echo "No fué posible guardar los datos del administrador";
    }
}
