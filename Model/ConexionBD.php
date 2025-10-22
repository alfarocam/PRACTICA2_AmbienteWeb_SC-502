<?php
function AbrirBD()
{
    $servidor = "localhost";
    $usuario = "root";
    $contrasenna = "";  
    $baseDatos = "practica2";

    $conexion = mysqli_connect($servidor, $usuario, $contrasenna, $baseDatos);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    mysqli_set_charset($conexion, "utf8");
    return $conexion;
}

function CerrarBD($conexion)
{
    mysqli_close($conexion);
}

function EjecutarSentencia($conexion, $sentencia)
{
    $resultado = mysqli_query($conexion, $sentencia);
    return $resultado;
}
?>