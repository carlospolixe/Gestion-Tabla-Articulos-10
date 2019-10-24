<?php
  require_once("lib/funcionesTabla.php");
  $tabla = generarTabla();
  $cabecera = array_keys($tabla[0]);

  //Variables del Formulario
  $formid = ultimoId($tabla) + 1;
  $formdescripcion = $_POST['formdescripcion'];
  $formmodelo = $_POST['formmodelo'];
  $formcategoria = $_POST['formcategoria'];
  $formunidades = $_POST['formunidades'];
  $formprecio = $_POST['formprecio'];
  
  //Array de Libros con el POST
  $nuevoLibro= [
    "Id" =>$formid ,
    "Descripcion" => $formdescripcion,
    "Modelo" => $formmodelo,
    "Categoria " => $formcategoria,
    "Unidades" => $formunidades,
    "Precio" => $formprecio
  ];

  $tabla[] = $nuevoLibro;
  require_once("./template/libro.php");
?>