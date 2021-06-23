<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'profesor.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oProfesor=new profesor();
$oProfesor->id=$_GET['id'];
$result=$oProfesor->eliminarProfesor();
if($result){
    header("Location: listarprofesor.php");
}else{
    echo "error al eliminar el profesor";
}
?>