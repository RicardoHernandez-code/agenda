<?php

include 'functions.php';

$conexion = conexion($bd_config);


if(isset($_POST['crear'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $movil = $_POST['movil'];
    $email = $_POST['email'];
    crearContacto($conexion, $nombre, $apellido, $telefono, $movil, $email);
    header('Location:index.php');
}

if(isset($_POST['volver'])){
    header('Location:index.php');
}


include 'views/crear.view.php';?>