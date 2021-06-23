<?php

//se importan los archivos de conexion.php y nota.php
require_once 'nota.php';
require_once 'conexion.php';
//se instancia el objeto nota
$oNota=new nota();
$oNota->idMatricula=$_GET['id'];
$result=$oNota->eliminarnota();
if($result){
    header("Location: detallecurso.php");
}else{
    echo "error al eliminar el estudiante";
}
?>