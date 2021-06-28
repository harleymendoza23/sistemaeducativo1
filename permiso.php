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

    public function listaPaginasConPermiso($idRol){
        $oConexion=new conectar();
        //Establece conexion con la base de datos.
        $conexion=$oConexion->conexion();
        
        $sql="SELECT pag.nombre,per.id FROM permiso per inner JOIN  pagina pag ON per.idPagina=pag.id WHERE per.idRol=$idRol and per.eliminado=false";
        $result=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function eliminarpermiso(){
        //se instancia el objeto conectar
        $oconexion= new conectar();
        //se establece conexión con la base de datos
        $conexion=$oconexion->conexion();
        //consulta para eliminar el registro
        $sql="UPDATE permiso SET eliminado=1 WHERE id=$this->id";
        // $sql="DELETE FROM estudiante WHERE id=$this->id";
        //se ejecuta la consulta
        $result=mysqli_query($conexion,$sql);
        return $result;
      }


}


    ?>