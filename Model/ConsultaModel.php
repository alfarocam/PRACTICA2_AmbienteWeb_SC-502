<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Model/ConexionBD.php';

function ConsultarVehiculosModel()
{
    try {
        $conexion = AbrirBD();
        
        $sentencia = "CALL ConsultarVehiculos()";
        
        $resultado = EjecutarSentencia($conexion, $sentencia);
        
        CerrarBD($conexion);
        
        return $resultado;
        
    } catch (Exception $e) {
        return null;
    }
}

function ConsultarVehiculosFiltradosModel($cedula, $nombre, $marca, $modelo, $precio)
{
    try {
        $conexion = AbrirBD();
        
        $sentencia = "SELECT v.IdVehiculo, ve.Cedula, ve.Nombre, v.Marca, v.Modelo, v.Color, v.Precio 
                      FROM vehiculos v 
                      INNER JOIN vendedores ve ON v.IdVendedor = ve.IdVendedor 
                      WHERE ve.Estado = 1";
        
        if (!empty($cedula)) {
            $sentencia .= " AND ve.Cedula LIKE '%$cedula%'";
        }
        if (!empty($nombre)) {
            $sentencia .= " AND ve.Nombre LIKE '%$nombre%'";
        }
        if (!empty($marca)) {
            $sentencia .= " AND v.Marca LIKE '%$marca%'";
        }
        if (!empty($modelo)) {
            $sentencia .= " AND v.Modelo LIKE '%$modelo%'";
        }
        if (!empty($precio)) {
            $sentencia .= " AND v.Precio = $precio";
        }
        
        $resultado = EjecutarSentencia($conexion, $sentencia);
        
        CerrarBD($conexion);
        
        return $resultado;
        
    } catch (Exception $e) {
        return null;
    }
}
?>