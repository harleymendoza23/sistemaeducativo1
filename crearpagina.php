<?php
 require_once 'pagina.php';
 require_once 'conexion.php';
 $opagina=new pagina();
 $opagina->idModulo=$_GET['idModulo'];
 $opagina->nombre=$_GET ['nombre'];

 $result=$opagina->nuevoPagina();
 if($result){
    header("Location: detallemodulo.php?idModulo=$opagina->idModulo");
}else{
    echo "error al registrar la pagina";
}
?>