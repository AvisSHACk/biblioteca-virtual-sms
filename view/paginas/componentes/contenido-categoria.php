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

    $filtrados = LibroController::filtrarLibros();

    // echo "<pre>";
    // echo $_POST["generos"];
    // echo $_POST["autores"];
    // echo "</pre>";
?>
<?php include_once "header.php" ?>

<main>
        <div class="l-container">
            <h3 class="h3 icon-star">Categorias </h3>
            <form class="Filtros" method="POST">
                <label for="generos" class="Filtros__nombre">Tipo:</label>
                <select class="Filtros__select" name="generos" id="generos">
                    <option class="Filtros__opcion" value="1">Matematica</option>
                    <option class="Filtros__opcion" value="2">Novelas</option>
                    <option class="Filtros__opcion" value="3">Educacion</option>
                    <option class="Filtros__opcion" value="4">Historia</option>
                </select>
        
                <label for="autores" class="Filtros__nombre">Autor:</label>
                <select class="Filtros__select" name="autores" id="autores">
                    <option class="Filtros__opcion" value="1">Mario vargas llosa</option>
                    <option class="Filtros__opcion" value="2">Anthony Serquén</option>
                </select>
        
                <label for="año" class="Filtros__nombre">Año:</label>
                <select class="Filtros__select" name="año" id="año">
                    <option class="Filtros__opcion" value="2019">2019</option>
                    <option class="Filtros__opcion" value="2020">2020</option>
                    <option class="Filtros__opcion" value="2021">2021</option>
                    <option class="Filtros__opcion" value="2022">2022</option>
                </select>
        
                <button class="Filtros__button Button--black">Filtrar</button>
            </form>
            <div class="Cards">
                <div class="Cards__container">
                <?php foreach ($filtrados as $key): ?>
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
                <?php endforeach ?>
                </div>
            </div>

        </div>
    </main>