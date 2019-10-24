<form method="POST" action="index.php">
<div class="form-group">
        <label for="exampleInputEmail1">ID</label>
        <input type="text" name="formdescripcion" class="form-control" id="inputtitulo" value="<?= $key+1?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" name="formdescripcion" class="form-control" id="inputtitulo" value="<?= $descripcion?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Modelo</label>
        <input type="text" name="formmodelo" class="form-control" id="inputautor" value="<?= $modelo?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoria</label>
        <input type="text" name="formcategoria" class="form-control" id="inputcategoria" value="<?= $categoria?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Unidades</label>
        <input type="text" name="formunidades" class="form-control" id="inputeditorial" value="<?= $unidades?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="formprecio" class="form-control" id="inputprecio" value="<?= $precio?>" disabled>
    </div>
    <div>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  
    </div>
</form>