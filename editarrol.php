<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'roles.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$orol=new rol();
$orol->idRol=$_GET['idRol']; 
$orol->nombreRol=$_GET['nombreRol'];

$result=$orol->actualizarrol();
if($result){
    header("Location: listarrol.php");
}else{
    echo "error al actualizar el rol";
}
?>