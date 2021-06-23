<?php
class estudiante{
  //para utilizar las conexiones del archivo  conexion.popover-header

    
  public $id=0;
  public $nombre= "";
  public $tipoDocumento="";
  public $documento="";
  public $apellido="";
  public $direccion="";
  public $telefono="";

  function nuevoEstudiante(){
      $oconxion=new conectar();
      $conexion=$oconxion->conexion();
        $sql="INSERT INTO estudiante (tipoDocumento,documentoIdentidad,nombres,apellidos,direccion,telefono,eliminado) 
        VALUES ('$this->tipoDocumento','$this->documento','$this->nombre','$this->apellido','$this->direccion','$this->telefono',false)";
         $result=mysqli_query($conexion,$sql);
    return $result;
     
    }
    function listarestudiante(){
        $oconexion=new conectar();
        $conexion=$oconexion->conexion();
        $sql = "SELECT * FROM estudiante WHERE eliminado=false";
        //serive para ejecutar la funcion
        $result=mysqli_query($conexion,$sql);
        //organiza el resultado de la consola y lo retorno
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }

 function consultarEstudiante(){
  $oconexion=new conectar();
   $conexion =$oconexion->conexion();
   $sql = "SELECT * FROM estudiante WHERE id=$this->id";
   $result=mysqli_query($conexion,$sql);
   $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
   foreach($result as $registro) {
    
      //se consultan en los parametros
      $this->id=$registro['id'];
      $this->tipoDocumento=$registro['tipoDocumento'];
      $this->documento=$registro['documentoIdentidad'];
      $this->apellido=$registro['apellidos'];
      $this->nombre=$registro['nombres'];
      $this->direccion=$registro['direccion'];
      $this->telefono=$registro['telefono'];
    
    }
  }

// function Anterior($Referencia){
//    echo "
//           <input type=\"button\" 
//           onclick=\"window.location='$Referencia?&Pagina=$Referencia'\" 
//           value=\"Retornar\" 
//           name=\"volver\">
//        ";
//        Anterior("estudiante.html");
//  }
     

 function actualizarEstudiante(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para actualizar el registro
  $sql="UPDATE estudiante SET tipoDocumento='$this->tipoDocumento',
  documentoIdentidad='$this->documento',
  nombres='$this->nombre',
  apellidos='$this->apellido',
  direccion='$this->direccion',
  telefono='$this->telefono' 
  WHERE id=$this->id";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}
function eliminarEstudiante(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para eliminar el registro
  $sql="UPDATE estudiante SET eliminado=1 WHERE id=$this->id";
  // $sql="DELETE FROM estudiante WHERE id=$this->id";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}
}
?>