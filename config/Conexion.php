<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');

// validador: muestra error en caso de fallo en la conexion
if(mysqli_connect_errno())
{
    printf("Error en la conexión de la base de datos: %s\n", mysqli_connect_errno());
    exit();
}

if (!function_exists('ejecutarConsulta'))
{
    function ejecutarConsulta($sql)
    {
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function ejecutarConsultaSimpleFila($sql)
    {
        global $conexion;
        $query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
    }

    function ejecutarConsulta_retornarID($sql)
    {
        global $conexion;
        $query = $conexion->query($sql);
        return $conexion->insert_id;
    }

    function limpiarCadena($srt)
    {
        global $conexion;
        $srt = mysqli_real_escape_string($conexion, trim($srt));
        return htmlspecialchars($srt);
    }



}
?>