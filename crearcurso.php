<?php
 require_once 'curso.php';
 require_once 'conexion.php';
 $oCurso=new cursos();
 $oCurso->curso=$_GET ['nombrecurso'];
 $oCurso->idProfesor=$_GET['idProfesor'];
 $oCurso->fechaInicio=$_GET['fechaInicio'];
 $oCurso->fechaFin=$_GET['fechaFin'];
 $result=$oCurso->nuevoCurso();
 if($result){
    header("Location: listarcurso.php");
}else{
    echo "error al registrar las notas";
}
?>