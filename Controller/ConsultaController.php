<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Model/ConsultaModel.php';

$datosVehiculos = null;

if(isset($_POST["btnConsultar"]))
{
    $cedula = $_POST["Cedula"];
    $nombre = $_POST["Nombre"];
    $marca = $_POST["Marca"];
    $modelo = $_POST["Modelo"];
    $precio = $_POST["Precio"];
    
    $datosVehiculos = ConsultarVehiculosFiltradosModel($cedula, $nombre, $marca, $modelo, $precio);
    
    if($datosVehiculos == null || mysqli_num_rows($datosVehiculos) == 0)
    {
        $_POST["Mensaje"] = "No se encontraron vehículos con los criterios especificados";
    }
}
else
{
    $datosVehiculos = ConsultarVehiculosModel();
}
?>