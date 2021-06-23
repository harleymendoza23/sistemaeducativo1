<?php
 require_once 'modulo.php';
 require_once 'conexion.php';
 $omodulo=new modulo();
 $omodulo->nombreModulo=$_GET ['nombreModulo'];

 $result=$omodulo->nuevomodulo();
 if($result){
    header("Location: listarmodulo.php");
}else{
    echo "error al registrar el modulo";
}
?>