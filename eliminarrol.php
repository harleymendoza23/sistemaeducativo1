<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'roles.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oRol=new rol();
$oRol->idRol=$_GET['idRol'];
$result=$oRol->eliminarrol();
if($result){
    header("Location: listarrol.php");
}else{
    echo "error al eliminar el rol";
}
?>