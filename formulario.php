<?php
  require_once("lib/funcionesTabla.php");
  $ldesplegable= generardesplegable();
?>
<!doctype html>
<html lang="es">
  <head>
    <?php
      require_once("./template/partials/link.php");
    ?>
  </head>
  <body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <div class="container">
      <?php
        require_once("./template/partials/head.php");
      ?>
      <section> 
        <article>
        <legend>Añadir Articulos</legend>
          <?php
            require_once("./template/partials/form.php");
          ?>
        </article>
      </section>
      <?php require_once("./template/partials/footer.php");?>
    </div>
  </body>
 
</html>