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
    include_once "header.php";
?>
<?php 
include_once "header.php";
?>
<main>
        <div class="l-container">
            <div class="EditarPerfil">
                <h2 class="EditarPerfil__title">Edita tu perfil</h2>
                <form action="" method="post">
                    <div class="EditarPerfil__info">
                        <label for="foto" class="EditarPerfil__label EditarPerfil__image">
                            <img src="view/img/user.jpg" alt="">
                            <input class="EditarPerfil__input" type="file">
                        </label>
                    <div class="EditarPerfil__info">
                        <label for="nombre" class="EditarPerfil__label">Nombres:</label>
                        <input class="EditarPerfil__input" type="text" name="nombre" id="nombre" value="Anthony Victor">
                    </div>
                    <div class="EditarPerfil__info">
                        <label for="apellidos" class="EditarPerfil__label">Apellidos:</label>
                        <input class="EditarPerfil__input" type="text" name="apellidos" id="apellidos" value="Serquén Sevilla">
                    </div>
                    <div class="EditarPerfil__info">
                        <label for="grado" class="EditarPerfil__label">Grado:</label>
                        <input class="EditarPerfil__input" type="number" name="grado" id="grado" value="3">
                    </div>
                    <div class="EditarPerfil__info">
                        <label for="seccion" class="EditarPerfil__label">Seccion:</label>
                            <input class="EditarPerfil__input" type="text" name="seccion" id="seccion" value="A">
                    </div>
                    <div class="EditarPerfil__info">
                        <label for="email" class="EditarPerfil__label">Email:</label>
                        <input class="EditarPerfil__input" type="email" name="email" id="email" value="correo@correo.com">
                    </div>
                    <div class="EditarPerfil__info">
                        <label for="contrasena" class="EditarPerfil__label">contraseÑa:</label>
                        <input class="EditarPerfil__input" type="password" name="contrasena" id="contrasena" value="dasdasds">
                    </div>
                    <button type="submit" class="EditarPerfil__button Button--black">Actualizar datos</button>
                </form>
            </div>
        </div>
    </main>