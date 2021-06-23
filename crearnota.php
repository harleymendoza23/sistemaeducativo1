<?php
require_once 'nota.php';
require_once 'conexion.php';
require_once 'matricula.php';

$oNota=new nota();
$oNota->idMatricula=$_GET['idMatricula'];
$oNota->nota1=$_GET['nota1'];
$oNota->nota2=$_GET['nota2'];
$oNota->nota3=$_GET['nota3'];
$oNota->promedio=$_GET['promedio'];
$result=$oNota->nuevoNota();
if($result){
    $oMatricula=new matricula();
    $oMatricula->id=$_GET['idMatricula'];
    $oMatricula->NotaFinal=$_GET['promedio'];
    $result=$oMatricula->registrarnotafinal();
    if($result){
        header("location: detallecurso.php?id=".$_GET['idCurso']);
    } else {
        echo "Error al registrar nota final";
    }
}else {
    echo "Error al registrar la Nota";
}
?>