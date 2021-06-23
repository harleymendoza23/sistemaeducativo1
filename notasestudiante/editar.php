<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'estudiante.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oEstudiante=new estudiante();
$oEstudiante->id=$_GET['id']; 
$oEstudiante->tipoDocumento=$_GET['tipoDocumento'];
$oEstudiante->documento=$_GET['documento'];
$oEstudiante->nombre=$_GET['nombres'];
$oEstudiante->apellido=$_GET['apellidos'];
$oEstudiante->direccion=$_GET['direccion'];
$oEstudiante->telefono=$_GET['telefono'];
$result=$oEstudiante->actualizarEstudiante();
if($result){
    header("Location: listartabla.php");
}else{
    echo "error al actualizar el estudiante";
}
?>