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
        <div class="Libro">
            <div class="l-container Libro__container">
                <div class="Libro__info">
                    <img class="Libro__imagen" src="img/matematica.webp" alt="">
                    <div class="Libro__detalles">
                        <h2 class="Libro__titulo h2">Matematica 1</h2>
                        <p class="Libro__autor">Mario Vargas Llosa</p>
                        <p class="Libro__detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Laudantium et praesentium beatae. Quam, quibusdam incidunt recusandae in, 
                            accusamus modi pariatur voluptate doloribus, quos sint explicabo voluptatem nisi 
                            porro neque aliquid?
                        </p>
                        <div class="Libro__buttons">
                            <a href="#" class="Button--black">Leer</a>
                            <a href="#" class="Button--black">Prestar</a>
                        </div>
                    </div>
                </div>
                <div class="Libro__right">
    
                </div>
            </div>
        </div>
    </main>