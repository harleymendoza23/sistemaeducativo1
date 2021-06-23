<?php
class profesor{
  //para utilizar las conexiones del archivo  conexion.popover-header

    
  public $id=0;
  public $nombre="";
  public $apellido="";
  public $direccion="";
  public $telefono="";

  function nuevoProfesor(){
      $oconexion=new conectar();
      $conexion=$oconexion->conexion();
        $sql="INSERT INTO profesores (nombre,apellido,direccion,telefono,eliminado) 
        VALUES ('$this->nombre','$this->apellido','$this->direccion','$this->telefono',false)";
         $result=mysqli_query($conexion,$sql);
         return $result;
    
     
    }
    function listarprofesor(){
        $oconexion=new conectar();
        $conexion=$oconexion->conexion();
        $sql = "SELECT * FROM profesores WHERE eliminado=false";
        //serive para ejecutar la funcion
        $result=mysqli_query($conexion,$sql);
        //organiza el resultado de la consola y lo retorno
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }

 function consultarProfesor(){
  $oconexion=new conectar();
   $conexion =$oconexion->conexion();
   $sql = "SELECT * FROM profesores WHERE id=$this->id";
   $result=mysqli_query($conexion,$sql);
   $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
   foreach($result as $registro) {
    
      //se consultan en los parametros
      $this->id=$registro['id'];
      $this->apellido=$registro['apellido'];
      $this->nombre=$registro['nombre'];
      $this->direccion=$registro['direccion'];
      $this->telefono=$registro['telefono'];
    
    }
  }
  function actualizarProfesor(){
    //se instancia el objeto conectar
    $oconexion= new conectar();
    //se establece conexión con la base de datos
    $conexion=$oconexion->conexion();
    //consulta para actualizar el registro
    $sql="UPDATE profesores SET nombre='$this->nombre',
    apellido='$this->apellido',
    direccion='$this->direccion',
    telefono='$this->telefono' 
    WHERE id=$this->id";
    //se ejecuta la consulta
    $result=mysqli_query($conexion,$sql);
    return $result;
  }
  function eliminarProfesor(){
    //se instancia el objeto conectar
    $oconexion= new conectar();
    //se establece conexión con la base de datos
    $conexion=$oconexion->conexion();
    //consulta para eliminar el registro
    $sql="UPDATE profesores SET eliminado=1 WHERE id=$this->id";
    // $sql="DELETE FROM estudiante WHERE id=$this->id";
    //se ejecuta la consulta
    $result=mysqli_query($conexion,$sql);
    return $result;
  }
}

?>