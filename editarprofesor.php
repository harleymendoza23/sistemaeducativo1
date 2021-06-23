<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'profesor.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oProfesor=new profesor();
$oProfesor->id=$_GET['id'];
$oProfesor->nombre=$_GET['nombre'];
$oProfesor->apellido=$_GET['apellido'];
$oProfesor->direccion=$_GET['direccion'];
$oProfesor->telefono=$_GET['telefono'];
$result=$oProfesor->actualizarProfesor();
if($result){
    header("Location: listarprofesor.php");
}else{
    echo "error al actualizar el profesor";
}
?>