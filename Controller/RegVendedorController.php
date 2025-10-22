<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Model/RegVendedorModel.php';

if(isset($_POST["btnGuardarVendedor"]))
{
    $cedula = $_POST["Cedula"];
    $nombre = $_POST["Nombre"];
    $correoElectronico = $_POST["CorreoElectronico"];
    
    $resultado = RegistrarVendedorModel($cedula, $nombre, $correoElectronico);
    
    if($resultado)
    {
        $_POST["Mensaje"] = "Vendedor registrado exitosamente";
        header("Location: ../../View/Inicio/Home.php");
    exit;
    }
    else
    {
        $_POST["Mensaje"] = "No se ha podido registrar el vendedor";
    }
}
?>