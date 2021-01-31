<?php
//conexión a la base de datos
require "../config/Conexion.php";

class Categoria
{
	//constructor
	public function __construct()
	{ }

	//método para insertar registros
	public function insertar($nombre, $descripcion)
	{
		$sql = "INSERT INTO categoria (nombre,descripcion,condicion)
		VALUES ('$nombre','$descripcion','1')";
		return ejecutarConsulta($sql);
	}

	//método para editar registros
	public function editar($idcategoria, $nombre, $descripcion)
	{
		$sql = "UPDATE categoria SET nombre='$nombre',descripcion='$descripcion' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//método para desactivar categorías
	public function desactivar($idcategoria)
	{
		$sql = "UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//método para activar categorías
	public function activar($idcategoria)
	{
		$sql = "UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//método para mostrar los datos de un registro a modificar
	public function mostrar($idcategoria)
	{
		$sql = "SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//método para listar los registros
	public function listar()
	{
		$sql = "SELECT * FROM categoria";
		return ejecutarConsulta($sql);
	}

	/*
	método para cargar las categorias en el combobox del formulario html
	1= categoria activada
	*/
	public function select()
	{
		$sql = "SELECT * FROM categoria WHERE condicion=1";
		return ejecutarConsulta($sql);
	}
}