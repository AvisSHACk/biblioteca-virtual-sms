<?php

if(isset($_SESSION['validarIngreso'])){
    if($_SESSION['validarIngreso'] == "ok") {
        echo "<script>
                window.location = 'inicio';
            </script>";
        
        return;
    }
}
?>
<?php require_once "componentes/contenido_login.php"?>