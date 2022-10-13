<?php

Class ControladorRegistro {
    static function registrarUsuario() {
        if(isset($_POST["nombre_registro"])) {

            if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre_registro"]) &&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["apellidos_registro"]) && 
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email_registro"]) &&
				preg_match('/^[0-9a-zA-Z]+$/', $_POST["password_registro"])){

                    $datos = Array("nombres" => $_POST["nombre_registro"],
                                        "apellidos" => $_POST["apellidos_registro"],
                                        "photoPerfil" => 'algo',
                                        "email" => $_POST["email_registro"],
                                        "contrasena" => $_POST["password_registro"],
                                        "rol" => 'algo');
        
                    
        
                    $respuesta = ModeloRegistro::registrarUsuario('usuarios', $datos);
        
                    return $respuesta;
                } else {
                    $respuesta = "error";        
                    return $respuesta;
                }
    
        } 
        
    }

    public function ingresoUsuario(){
        echo "Hola";
        if(isset($_POST["email_ingreso"])) {
            $tabla = 'usuarios';
            $item = 'email';
            $valor = $_POST["email_ingreso"];

            $respuestas = ModeloRegistro::ingresoUsuario($tabla, $item, $valor);
            $_SESSION['validarIngreso'] = "ok";
            echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                    

                </script>";

            return $respuestas;

            
        }
    }

}