<?php

//se importan los archivos de conexion.php y estudiante.php
require_once 'usuario.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$ousuario=new usuario();
$ousuario->idUser=$_GET['idUser'];
$result=$ousuario->eliminarusuario();
if($result){
    header("Location: listausuarios.php");
}else{
    echo "error al eliminar el rol";
}
?>