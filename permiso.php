<?php

require_once 'conexion.php';

class permiso
{
   
    public $idRol="";
    public $idModulo="";
    public $idPagina="";
    public $url="";


    public function verificarpermisourl(){
        $oConexion=new conectar();
        //Establece conexion con la base de datos.
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM permiso per INNER JOIN pagina pag on per.idPagina=pag.id
        WHERE per.idRol=$this->idRol AND pag.url='$this->url'";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $result;
        
    }

    public function listarpermiso(){
        $oConexion=new conectar();
        //Establece conexion con la base de datos.
        $conexion=$oConexion->conexion();
         
    }


}


    ?>