<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $key = $_GET['indice'];

   
    
    $formid = $key;
    $formdescripcion = $_POST['formdescripcion'];
    $formmodelo = $_POST['formmodelo'];
    $formcategoria = $_POST['formcategoria'];
    $formunidades = $_POST['formunidades'];
    $formprecio = $_POST['formprecio'];
  

    $registro =[
      "Id" =>$formid ,
      "Descripcion" => $formdescripcion,
      "Modelo" => $formmodelo,
      "Categoria" => $formcategoria,
      "Unidades" => $formunidades,
      "Precio" => $formprecio
    ];
  $tabla = actualizar($tabla, $registro, $key);
  require_once("./template/libro.php");
?>