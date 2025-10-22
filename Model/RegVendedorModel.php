<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Model/ConexionBD.php';

function RegistrarVendedorModel($cedula, $nombre, $correo)
{
    try {
        $conexion = AbrirBD();
        
        $sentencia = "CALL RegistrarVendedor('$cedula', '$nombre', '$correo')";
        
        $resultado = EjecutarSentencia($conexion, $sentencia);
        
        CerrarBD($conexion);
        
        return $resultado;
        
    } catch (Exception $e) {
        return false;
    }
}
?>