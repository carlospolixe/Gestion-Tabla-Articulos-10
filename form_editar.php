<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $ldesplegable= generardesplegable();

    $key = $_GET['indice'];
    $registro = $tabla[$key];

    $descripcion = $registro['Descripcion'];
    $modelo = $registro['Modelo'];
    $categoria = $registro['Categoria'];
    $unidades = $registro['Unidades'];
    $precio = $registro['Precio'];

    require_once("lib/funcionesTabla.php");
?>
<!doctype html>
<?php
    require_once("./template/partials/link.php");
?>
<div class="container">
    <body>
        <?php
            require_once("./template/partials/head.php");
            require_once("./template/menu.php");
        ?>
        <section> 
            <article>
                <legend>Editar Articulos</legend>
                <?php require_once("./template/partials/form_editar.php"); ?>
            </article>
        </section>
        <?php  require_once("./template/partials/footer.php");?>
        </div>
        
    </body>
</html>