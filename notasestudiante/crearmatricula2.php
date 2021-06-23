<?php
require_once 'matricula.php';
require_once 'conexion.php';

$oMatricula=new Matricula();
$oMatricula->idCurso=$_GET['idCurso'];
$oMatricula->idEstudiante=$_GET['idEstudiante'];
$result=$oMatricula->nuevoMatricula();
if($result){
    header("location: detallecurso.php?id=".$_GET['idCurso']);
}else {
    echo "Error al registrar la matricula";
}
?>