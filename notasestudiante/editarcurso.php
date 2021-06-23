

<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'curso.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oCurso=new cursos();
$oCurso->id=$_GET['id']; 
$oCurso->curso=$_GET['curso'];
$oCurso->idProfesor=$_GET['idProfesor'];
$oCurso->fechaInicio=$_GET['fechaInicio'];
$oCurso->fechaFin=$_GET['fechaFin'];

$result=$oCurso->actualizarcurso();
if($result){
    header("Location: listarcurso.php");
}else{
    echo "error al actualizar el curso";
}
?>