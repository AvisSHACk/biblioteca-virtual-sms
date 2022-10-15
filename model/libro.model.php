<?php 
require_once "conexion.php";
class LibroModel {
	static public function obtenerLibros($tabla){
		$stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
		
		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}
}