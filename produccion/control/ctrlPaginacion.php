<?php
require('../Modelo/ModeloProduccion.php');
$Produccion = new Produccion();

//recibimos las variables al cargar la pagina
$limit = $_POST['limit'];
$pagina = $_POST['pagina'];

//La funcion contadorUsuarios nos da la cantidad total de usuarios 
$produccion = $Produccion->contadorProduccion();
$totalProduccion = $produccion[0]['id']; 


//Vamos a tener como resultado siempre el valor entero. "1.3 = 2"
$totalpaginas = ceil($totalProduccion / $limit);


$anterior = $pagina - 1;  //atras
$siguiente = $pagina + 1; //adelante




if ($pagina != null) {
    $i = null;

    echo      "<nav aria-label='Page navigation example mt-5' id='pleasee'>";
    echo      "<ul class='pagination justify-content-center'>";
    //Si la pagina es menor o igual 1. Le pondrá la clase disabled
    if ($pagina <= 1) { 
        echo      "<li class='page-item disabled pr-1'>";
    } else {
        echo      "<li class='page-item  pr-1'>";
    }


    //Si la pagina es menor a uno va a imprimir # , Si no va decir pagina= 1  ejm
    if ($pagina <= 1) {
        echo      "<a class='btn btn-outline-primary' href='#$anterior'>Anterior</a>";
    } else {
        echo      "<a class='btn btn-outline-primary' href='?page=$anterior'>Anterior</a>";
    }
    echo      "</li>";

    //no le voy a explicar un for men
    for ($i = 1; $i <= $totalpaginas; $i++) :

        //La pagina actual tendra la clase active
        if ($pagina == $i) {
            echo      "<li class='page-item active'>";
        }
            // $i nos permite establecer cuantas paginas tenemos y donde estamos ubicados
        echo      "<a class='page-link rounded' href='produccionVista.php?page=$i'>$i</a>";
        echo      "</li>";
    endfor;

    //Si la pagina es igual o mayor al total de paginas, agrega la clase disable
    if ($pagina >= $totalpaginas) {
        echo      "<li class='page-item disabled pl-1'>";
    } else {
        echo      "<li class='page-item  pl-1'>";

    }
    
    //Si la pagina es mayor al total de paginas o igual va a imprimir # , Si no va decir pagina= 2  ejm
    if ($pagina >= $totalpaginas) {
        echo      "<a class='btn btn-outline-primary' href='# $siguiente'>Siguiente</a>";
    }else{
        echo      "<a class='btn btn-outline-primary' href='?page=$siguiente'>Siguiente</a>";

    }
    echo      "</li>";
    echo      "</ul>";
    echo      "</nav>";
}