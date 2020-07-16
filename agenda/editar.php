<?php
include 'functions.php';

$conexion = conexion($bd_config);

$id_contacto = $_GET['id'];

$contacto = contactoPorId($conexion, $id_contacto);

if(isset($_POST['grabar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $movil = $_POST['movil'];
    $email = $_POST['email'];
    editarContacto($conexion,$id_contacto, $nombre, $apellido, $telefono, $movil, $email);
    $contacto = contactoPorId($conexion, $id_contacto);
}

if(isset($_POST['volver'])){
    header('Location:index.php');
}

include 'views/editar.view.php';?>