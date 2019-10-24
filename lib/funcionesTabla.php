<?php

function generardesplegable(){

    $ldesplegable=[
        "Sobremesa",
        "Pantalla",
        "Impresora",
        "Componente",
        "Portatil"
        
    ];
    return $ldesplegable;

}


function generarTabla(){
    /* Fichero: FuncionesTabla.php
    Descripción: Colección de funciones para la gestión de una tabla
    Proyecto: Actividad 3.5
    Fecha: 16/10/2019
    */

    /*Genera una matriz de libros índice primario escalar
    índice secundario asociativo
    Argumentos de entrada: null
    Salida: Tabla de Libros */


    $tabla = 
    [
        [
            "Id" => "1",
            "Descripcion" => "Teclado Mecanico- NEWSKILL 70",
            "Modelo" => "NEWS K70",
            "Categoria" => "Componente",
            "Unidades" => "13",
            "Precio" => "19.5"
        ],
        [
            "Id" => "2",
            "Descripcion" => "Monitor 144Hz",
            "Modelo" => "MSI MAG 24 ",
            "Categoria" => "Pantalla",
            "Unidades" => "33",
            "Precio" => "199"
        ],
        [
            "Id" => "3",
            "Descripcion" => "PC Ofimatica 8GB RAM 1TB",
            "Modelo" => "PC sobremesa",
            "Categoria" => "PC sobremesa",
            "Unidades" => "12",
            "Precio" => "400"
        ],
        [
            "Id" => "4",
            "Descripcion" => "Portatil Gaming RTX 2080",
            "Modelo" => "Gigabyte AERO",
            "Categoria" => "Portátil",
            "Unidades" => "19",
            "Precio" => "2000"
        ],
        [
            "Id" => "5",
            "Descripcion" => "Impresora HP Lasejet",
            "Modelo" => "HP LASER 8675h",
            "Categoria" => "Impresora",
            "Unidades" => "16",
            "Precio" => "149"
        ]
    ];

    return $tabla;

}

function eliminar($tabla, $key){

        unset($tabla[$key]);
        # Reconstruye los índices primarios de la tabla
        $tabla = array_values ($tabla);
        return $tabla;
}

#crea la funcion actualizar libro
function actualizar ($tabla, $registro, $key ){
    $tabla[$key]=$registro;
    return $tabla;
}

#crea la funcion nuevo libro
function nuevo ($tabla, $nuevo){
    $tabla[]=$nuevo;
    return ($tabla);
}

#crea la funcion ordenar
function ordenar ($tabla, $campo){
    foreach($tabla as $key => $nuevo){
        $aux[$key] = $nuevo[$campo];
    }
    array_multisort($aux, SORT_DESC, $tabla);
    return ($tabla);
}


function filtrar ($tabla, $expresion){

   $aux= array();

   foreach($tabla as $key => $campo){
       if(in_array($expresion, $campo)){

           $aux[]=$campo;
       }
    }
    return($aux);
}

function ultimoId ($tabla){
    $ultimo = end($tabla);
    return($ultimo['Id']);
}
?>