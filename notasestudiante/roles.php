<?php
class rol{
  //para utilizar las conexiones del archivo  conexion.popover-header

    
  public $idRol=0;
  public $nombreRol= "";
  
 

  function nuevoRol(){
      $oconxion=new conectar();
      $conexion=$oconxion->conexion();
        $sql="INSERT INTO rol (nombreRol,eliminado) 
        VALUES ('$this->nombreRol',false)";
         $result=mysqli_query($conexion,$sql);
    return $result;
     
    }
    function listarrol(){
        $oconexion=new conectar();
        $conexion=$oconexion->conexion();
        $sql = "SELECT * FROM rol WHERE eliminado=false";
        //serive para ejecutar la funcion
        $result=mysqli_query($conexion,$sql);
        //organiza el resultado de la consola y lo retorno
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }

    function consultarrol(){
      $oconexion=new conectar();
       $conexion =$oconexion->conexion();
       $sql = "SELECT r.idRol, r.nombreRol FROM rol r WHERE idRol=$this->idRol and eliminado=false";
       $result=mysqli_query($conexion,$sql);
       $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
       foreach($result as $registro) {
        
          //se consultan en los parametros
          $this->idRol=$registro['idRol'];
          $this->nombreRol=$registro['nombreRol'];
         
          
        
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
     

 function actualizarrol(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para actualizar el registro
  $sql="UPDATE rol SET nombreRol='$this->nombreRol','WHERE idRol=$this->idRol";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}
function eliminarrol(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para eliminar el registro
  $sql="UPDATE rol SET eliminado=1 WHERE idRol=$this->idRol";
  // $sql="DELETE FROM estudiante WHERE id=$this->id";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}
}
?>