<?php
 require_once 'profesor.php';
 require_once 'conexion.php';
 $oProfesor=new profesor();
 $oProfesor->nombre=$_GET ['nombre'];
 $oProfesor->apellido=$_GET['apellido'];
 $oProfesor->direccion=$_GET['direccion'];
 $oProfesor->telefono=$_GET['telefono'];
 $result=$oProfesor->nuevoProfesor();
 if($result){
    header("Location: listarprofesor.php");
}else{
    echo "error al registrar el profesor";
}
?>