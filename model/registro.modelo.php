<?php 
require_once "model/conexion.php";
Class ModeloRegistro {
    static function registrarUsuario($tabla, $datos) {
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(nombres, apellidos, photoPerfil, email, contrasena, rol) VALUES(:nombres, :apellidos, :photoPerfil, :email, :contrasena, :rol)");

		$stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":photoPerfil", $datos["photoPerfil"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);
		$stmt->bindParam(":rol", $datos["rol"], PDO::PARAM_STR);

		if($stmt -> execute()) {
			return "ok";
		} else {
			print_r(Conexion::conectar() -> errorInfo());
		}

		$stmt -> close();

		$stmt = null;
    }

	static function ingresoUsuario($tabla, $item, $valor) {
			$stmt = Conexion::conectar() -> prepare("SELECT * FROM usuarios WHERE email=:$item");

			$stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;	

		
	}
}