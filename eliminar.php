<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'estudiante.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oEstudiante=new estudiante();
$oEstudiante->id=$_GET['id'];
$result=$oEstudiante->eliminarEstudiante();
if($result){
    header("Location: listartabla.php");
}else{
    echo "error al eliminar el estudiante";
}
?>