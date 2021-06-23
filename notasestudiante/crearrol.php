<?php
 require_once 'roles.php';
 require_once 'conexion.php';
 $oRol=new rol();
 $oRol->nombreRol=$_GET ['nombreRol'];
 $oRol->nombre=$_GET['nombre'];
 $oRol->apellido=$_GET['apellido'];
 
 $result=$oRol->nuevoRol();
 if($result){
    header("Location: listarrol.php");
}else{
    echo "error al registrar el rol";
}
?>