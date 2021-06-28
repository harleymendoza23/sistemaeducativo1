<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'permiso.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oPermiso=new permiso();
$oPermiso->id=$_GET['id'];
$result=$oPermiso->eliminarpermiso();
if($result){
    header("Location: darpermiso.php?idRol=".$_GET['idRol']);
}else{
    echo "error al eliminar el rol";
}
?>