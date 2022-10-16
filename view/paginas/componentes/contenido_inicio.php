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
    require_once "controller/libro.controller.php";
    require_once "model/libro.model.php";
    $libros = LibroController::obtenerLibros();

    
    // echo "<pre>";
    // var_dump($libros);
    // echo "</pre>";
?>



    <main>
        <div class="l-container">
            <div class="Cards">
                <div class="Cards__category">
                    <h3 class="h3 Cards__title"><i class="icon-star"></i>Generalidades</h3>
                    <div class="Cards__container">

                    <?php foreach ($libros as $key): ?>

                        <article class="Card">
                            <div class="Card__container">
                                <div class="Card__cimage">
                                    <img class="Card__image" src="<?php echo $key["portada"]?>" alt="">
                                </div>
                                <div class="Card__info">
                                    <h3><?php echo $key["titulo"]?></h3>
                                    <p class="Card__description">
                                    <?php echo $key["descripcion"]?> 
                                    </p>
                                    <a href="leerlibro" class="Card__button Button--black">Leer</a>
                                </div>
                            <div>
                        </article>

                    <?php endforeach;?>

                    </div>
                </div>

                <div class="Cards__category">
                    <h3 class="h3 Cards__title"><i class="icon-star"></i>Generalidades</h3>
                    <div class="Cards__container">
                        <?php require "card.php" ?>
                    </div>
                </div>

                <div class="Cards__category">
                    <h3 class="h3 Cards__title"><i class="icon-star"></i>Generalidades</h3>
                    <div class="Cards__container">
                        <?php require "card.php" ?>
                    </div>
                </div>
                <div class="Cards__category">
                    <h3 class="h3 Cards__title"><i class="icon-star"></i>Generalidades</h3>
                    <div class="Cards__container">
                        <?php require "card.php" ?>
                    </div>
                </div>
            </div>

        </div>
    </main>