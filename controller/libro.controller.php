<?php 

class LibroController {
    static function obtenerLibros(){
        $tabla = 'libros';

		$respuesta = LibroModel::obtenerLibros($tabla);

		return $respuesta;
    }

    static public function filtrarLibros() {

        if(isset($_POST['generos'])) {
            $tabla1 = 'libros';
            $tabla2 = 'categorias';
            $tabla3 = 'autores';
            $respuesta = LibroModel::filtrarLibros($tabla1, $tabla2, $tabla3, $_POST['generos'], $_POST['autores']);

        } else {
            $tabla = 'libros';
            $respuesta = LibroModel::obtenerLibros($tabla);
        }

        return $respuesta;
    
}
}