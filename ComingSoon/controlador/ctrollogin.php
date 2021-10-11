<?php
require_once '../modelo/conexion.php';

$Usuario = $_POST['email'];
$Contrasena = $_POST['contrasena'];

$conexion = new PDODB();
$conexion->connect();

    $InstruccionSQL = "SELECT * FROM clientes
               WHERE Usuario = '".$Usuario."'";
    
    $resultado = $conexion->login($InstruccionSQL);

    if ($resultado != false) {
        session_start();
        foreach($resultado as $key => $value) {
            $_SESSION['codC'] = $value ['idCliente'];
            $_SESSION ['nombreC'] = $value ['Nombre'];
        }
      header("location: ../vista/MenuAdministradores.php");

    }else{
        header("../vista/index.php");
    }
