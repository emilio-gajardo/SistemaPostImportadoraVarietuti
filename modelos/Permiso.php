<?php
//conexión a la base de datos
require "../config/Conexion.php";

class Permiso
{
    //constructor
    public function __construct()
    { }

    //método para listar los registros
    public function listar()
    {
        $sql = "SELECT * FROM PERMISO";
        return ejecutarConsulta($sql);
    }
}
