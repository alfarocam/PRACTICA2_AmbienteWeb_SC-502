<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Model/RegVehiculoModel.php';


$vendedores = ObtenerVendedoresActivosModel();

if(isset($_POST["btnGuardarVehiculo"]))
{
    $marca = $_POST["Marca"];
    $modelo = $_POST["Modelo"];
    $color = $_POST["Color"];
    $precio = $_POST["Precio"];
    $idVendedor = $_POST["Vendedor"];
    
    $resultado = RegistrarVehiculoModel($marca, $modelo, $color, $precio, $idVendedor);
    
    if($resultado)
    {
        $_POST["Mensaje"] = "Vehículo registrado exitosamente";
        header("Location: ../../View/Inicio/Home.php");
    exit;
    }
    else
    {
        $_POST["Mensaje"] = "No se ha podido registrar el vehículo";
    }
}
?>