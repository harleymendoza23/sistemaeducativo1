<?php
 require_once 'estudiante.php';
 require_once 'conexion.php';
 $oEstudiante=new estudiante();
 $oEstudiante->nombre=$_GET ['nombre'];
 $oEstudiante->tipoDocumento=$_GET['tipoDocumento'];
 $oEstudiante->documento=$_GET['documento'];
 $oEstudiante->apellido=$_GET['apellido'];
 $oEstudiante->direccion=$_GET['direccion'];
 $oEstudiante->telefono=$_GET['telefono'];
 $result=$oEstudiante->nuevoEstudiante();
 if($result){
    header("Location: listartabla.php");
}else{
    echo "error al registrar el estudiante";
}
?>