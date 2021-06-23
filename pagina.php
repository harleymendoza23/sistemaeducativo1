<?php

require_once 'conexion.php';

class pagina{
    //atributos de la tabla pagina
    public $id=0;
    public $idModulo="";
    public $nombre="";
    public $enlace="";
    public $nombreModulo="";

    function nuevoPagina(){
    //instancia la clase conectar
    $oConexion=new conectar();
    //se establece la conexión con la base datos
    $conexion=$oConexion->conexion();
    //sentencia SQL para instertar estudiante

    //sentencia de insertar en la tabla pagina
    $sql="INSERT INTO pagina (idModulo,nombre,eliminado)
    VALUES ($this->idModulo,'$this->nombre',false)";

    //ejecuta la sentencia
    $result=mysqli_query($conexion,$sql);
    return $result;
    }

    function ListarPagina(){
    //se instancia el objeto conectar
    $oConexion=new conectar();
    //se establece conexión con la base datos
    $conexion=$oConexion->conexion();

    //se registra la consulta sql
    $sql="SELECT * FROM pagina WHERE idModulo=$this->idModulo AND eliminado=false";
    
    //se ejecuta la consulta en la base de datos
    $result=mysqli_query($conexion,$sql);
    //organiza resultado de la consulta y lo retorna
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function consultarPagina($id){
    //se instancia el objeto conectar
    $oConexion= new conectar();
    //se establece conexión con la base de datos
    $conexion=$oConexion->conexion();
    //consulta para retornar un solo registro
    $sql="SELECT * FROM pagina WHERE id=$id";
    //se ejecuta la consulta
    $result=mysqli_query($conexion,$sql);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($result as $registro){ 
        //se registra la consulta en los parametros
        $this->id=$registro['id'];
        $this->idModulo=$registro['idModulo'];
        $this->nombre=$registro['nombre'];
        $this->enlace=$registro['enlace'];
        }
    }

    function actualizarPagina(){
        //se instancia el objeto conectar
        $oConexion= new conectar();
        //se establece conexión con la base de datos
        $conexion=$oConexion->conexion();
        //consulta para actualizar el registro

        $sql="UPDATE pagina SET nombre='$this->nombre',
        enlace='$this->enlace'
        WHERE id=$this->id";
        
        //se ejecuta la consulta
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

    function eliminarPagina(){
    //se instancia el objeto conectar
    $oConexion= new conectar();
    //se establece conexión con la base de datos
    $conexion=$oConexion->conexion();
    
    //consulta para eliminar el registro
    $sql="UPDATE pagina SET eliminado=1 WHERE id=$this->id";
    // $sql="DELETE FROM estudiante WHERE id=$this->id";
    //se ejecuta la consulta
    $result=mysqli_query($conexion,$sql);
    return $result;
    }

}

?>