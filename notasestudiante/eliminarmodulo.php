<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'modulo.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$omodulo=new modulo();
$omodulo->idModulo=$_GET['idModulo'];
$result=$omodulo->eliminarmodulo();
if($result){
    header("Location: listarmodulo.php");
}else{
    echo "error al eliminar el modulo";
}
?>