<?php
class modulo{
  //para utilizar las conexiones del archivo  conexion.popover-header

    
  public $idModulo=0;
  public $nombreModulo= "";
  
  

  function nuevomodulo(){
      $oconxion=new conectar();
      $conexion=$oconxion->conexion();
        $sql="INSERT INTO modulo (nombreModulo,eliminado) 
        VALUES ('$this->nombreModulo',false)";
         $result=mysqli_query($conexion,$sql);
    return $result;
     
    }
    function listarmodulo(){
        $oconexion=new conectar();
        $conexion=$oconexion->conexion();
        $sql = "SELECT * FROM modulo WHERE eliminado=false";
        //serive para ejecutar la funcion
        $result=mysqli_query($conexion,$sql);
        //organiza el resultado de la consola y lo retorno
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }

 function consultarmodulo(){
  $oconexion=new conectar();
   $conexion =$oconexion->conexion();
   $sql = "SELECT * FROM modulo WHERE idModulo=$this->idModulo";
   $result=mysqli_query($conexion,$sql);
   $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
   foreach($result as $registro) {
    
      //se consultan en los parametros
      $this->idModulo=$registro['idModulo'];
      $this->nombreModulo=$registro['nombreModulo'];
     
    
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
function eliminarmodulo(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para eliminar el registro
  $sql="UPDATE modulo SET eliminado=1 WHERE idModulo=$this->idModulo";
  // $sql="DELETE FROM estudiante WHERE id=$this->id";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}
}
?>