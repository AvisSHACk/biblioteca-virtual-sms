<?php

Class ControladorRegistro {
    static function registrarUsuario() {
        if(isset($_POST["nombre_registro"])) {

            if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre_registro"]) &&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["apellidos_registro"]) && 
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email_registro"]) &&
				preg_match('/^[0-9a-zA-Z]+$/', $_POST["password_registro"])){

                    $encriptarPassword = crypt($_POST["password_registro"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                    $datos = Array("nombres" => $_POST["nombre_registro"],
                                        "apellidos" => $_POST["apellidos_registro"],
                                        "photoPerfil" => 'algo',
                                        "email" => $_POST["email_registro"],
                                        "contrasena" => $encriptarPassword,
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
        if(isset($_POST["email_ingreso"])) {
            $tabla = 'usuarios';
            $item = 'email';
            $valor = $_POST["email_ingreso"];

            $respuestas = ModeloRegistro::ingresoUsuario($tabla, $item, $valor);

            $encriptarPassword = crypt($_POST["password_ingreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			if(is_array($respuestas) && 
				$respuestas["email"] == $_POST["email_ingreso"] && 
				$respuestas["contrasena"] == $encriptarPassword) {
                    
                $_SESSION['validarIngreso'] = "ok";
                echo "<script>
                        if(window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
    
                </script>";
                
                if($respuestas["rol"] === 'admin') {

                    echo "<script>window.location = 'backend';</script>";

                } else if($respuestas["rol"] !== 'admin'){

                    echo "<script>window.location = 'inicio';</script>";

                }
            } else {

                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>";

                echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no son correctas</div>';
                    
            }

            
        }
    }

}