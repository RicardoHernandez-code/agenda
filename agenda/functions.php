<?php

include 'config/config.php';


function conexion($bd_config){
	try {
	$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	} catch (PDOException $e) {
		return false;
	}
}


function contactosPorLetra($conexion, $letra){
    $resultado = $conexion->query("SELECT contactos.* FROM contactos WHERE nombre LIKE '$letra%' ORDER BY id DESC");
	return $resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function contactoPorId($conexion, $id){
	$resultado = $conexion->query("SELECT contactos.* FROM contactos WHERE id = '$id'");
	return $resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function busquedaSearchBar($conexion, $busqueda){
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM contactos  WHERE nombre LIKE '%{$busqueda}%'");
	$sentencia->execute();
	return $sentencia->fetchAll();
}


// Funcion para borrar contacto

function borrarContacto($conexion, $id_contacto){
	$resultado = $conexion->query("DELETE FROM contactos WHERE id = '$id_contacto'");
}


// Funcion para editar contacto

function editarContacto($conexion,$id_contacto, $nombre, $apellido, $telefono, $movil, $email){
	$resultado = $conexion->query("UPDATE contactos SET nombre = '$nombre',apellido = '$apellido', telefono = '$telefono', movil = '$movil', email = '$email' WHERE id = '$id_contacto' ");
	$resultado->execute();
}

//Funcion para crear contacto

function crearContacto($conexion, $nombre, $apellido, $telefono, $movil, $email){
	$resultado = $conexion->query("INSERT INTO contactos (nombre, apellido, telefono, movil, email) VALUES ('$nombre','$apellido','$telefono','$movil','$email')");
}



?>