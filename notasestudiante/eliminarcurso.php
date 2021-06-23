<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'curso.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oCurso=new cursos();
$oCurso->id=$_GET['id'];
$result=$oCurso->eliminarcurso();
if($result){
    header("Location: listarcurso.php");
}else{
    echo "error al eliminar el estudiante";
}
?>