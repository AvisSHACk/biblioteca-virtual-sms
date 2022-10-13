<?php
if(!isset($_SESSION['validarIngreso'])){
        echo "<script>
                window.location = 'login';
            </script>";
        return;
    } else {
        if($_SESSION['validarIngreso'] !== "ok") {

            echo "<script>
                    window.location = 'login';
                </script>";
            
            return;

        }
    }

?>


<h1>Esta es la pagina de inicio</h1>
<a href="salir">Salir</a>