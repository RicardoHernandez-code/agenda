<?php
include 'functions.php';

$conexion = conexion($bd_config);

$id_contacto = $_GET['id'];

$contacto = contactoPorId($conexion, $id_contacto);

if(isset($_POST['borrar'])){
    borrarContacto($conexion, $id_contacto);
    header('Location: index.php');
}

if(isset($_POST['volver'])){
    header('Location: index.php');
}

include 'views/borrar.view.php';?>