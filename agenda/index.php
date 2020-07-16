<?php
include 'functions.php';

$conexion = conexion($bd_config);

    $todo = false;

    if(!isset($_POST['buscar'])){
        $todo = true;
    }else{
        $todo = false;
        $busqueda = busquedaSearchBar($conexion, $_POST['buscar']);
    }

    $letras = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

include 'views/index.view.php' ?>