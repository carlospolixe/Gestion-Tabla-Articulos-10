
<form method="POST" action="editar.php?indice=<?=$key?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" name="formdescripcion" class="form-control" id="inputtitulo" value="<?= $descripcion?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Modelo</label>
        <input type="text" name="formmodelo" class="form-control" id="inputautor" value="<?= $modelo?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoria</label>
        <select class="form-control" name="formcategoria" value="<?= $categoria?>">
        <?php foreach($ldesplegable as $valor):?>
            <?php if ($valor == $categoria):?>
                <option selected="selected">
                    <?=$valor;?>
                </option>
            <?php else:?>
                <option>
                    <?=$valor;?>
                </option>
            <?php endif?>
        <?php endforeach;?>
    
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Unidades</label>
        <input type="text" name="formunidades" class="form-control" id="inputeditorial" value="<?= $unidades?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="formprecio" class="form-control" id="inputprecio" value="<?= $precio?>">
    </div>
    <div>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
    <button type="reset" class="btn btn-secondary">Resetear</button>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</form>