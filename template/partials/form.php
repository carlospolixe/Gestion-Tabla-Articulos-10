<form method="POST" action="nuevo.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" name="formdescripcion" class="form-control" id="inputtitulo">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Modelo</label>
        <input type="text" name="formmodelo" class="form-control" id="inputautor">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoria </label>
        <select class="form-control" name="formcategoria" >
        <?php foreach($ldesplegable as $valor):?>
            <option>
                <?=$valor;?>
            </option>
        <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Unidades</label>
        <input type="text" name="formunidades" class="form-control" id="inputeditorial">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="formprecio" class="form-control" id="inputprecio">
    </div>
    <div>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
    <button type="reset" class="btn btn-secondary">Resetear</button>
    <button type="submit" class="btn btn-primary">Añadir</button>
    </div>
</form>