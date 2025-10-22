<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Model/ConexionBD.php';

function ObtenerVendedoresActivosModel()
{
    try {
        $conexion = AbrirBD();
        
        $sentencia = "CALL ObtenerVendedoresActivos()";
        
        $resultado = EjecutarSentencia($conexion, $sentencia);
        
        CerrarBD($conexion);
        
        return $resultado;
        
    } catch (Exception $e) {
        return null;
    }
}

function RegistrarVehiculoModel($marca, $modelo, $color, $precio, $idVendedor)
{
    try {
        $conexion = AbrirBD();
        
        $sentencia = "CALL RegistrarVehiculo('$marca', '$modelo', '$color', $precio, $idVendedor)";
        
        $resultado = EjecutarSentencia($conexion, $sentencia);
        
        CerrarBD($conexion);
        
        return $resultado;
        
    } catch (Exception $e) {
        return false;
    }
}
?>