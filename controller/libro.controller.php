<?php 

class LibroController {
    static function obtenerLibros(){
        $tabla = 'libros';

		$respuesta = LibroModel::obtenerLibros($tabla);

		return $respuesta;
    }
}