<?php
class cursos{
  //para utilizar las conexiones del archivo  conexion.popover-header

    
  public $id=0;
  public $curso= "";
  public $idProfesor="";
 public $nombreprofesor="";
 
  public $fechaInicio="";
  public $fechaFin="";
  

  function nuevoCurso(){
      $oconxion=new conectar();
      $conexion=$oconxion->conexion();
        $sql="INSERT INTO cursos (curso,idProfesor,fechaInicio,fechaFin,eliminado) 
        VALUES ('$this->curso','$this->idProfesor','$this->fechaInicio','$this->fechaFin',false)";
         $result=mysqli_query($conexion,$sql);
    return $result;
     
    }
    function listarcurso(){
      $oconexion=new conectar();
      $conexion=$oconexion->conexion();
      $sql="SELECT c.id,p.nombre,c.fechaInicio,c.fechaFin,c.curso,p.apellido FROM cursos c inner JOIN profesores p ON c.idProfesor=p.id WHERE c.eliminado=false ";
      $result=mysqli_query($conexion,$sql);
      return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    

 function consultarcurso(){
  $oconexion=new conectar();
   $conexion =$oconexion->conexion();
   $sql = "SELECT c.id,c.curso,c.fechaInicio,c.fechaFin,p.nombre,p.apellido,c.idProfesor  FROM cursos c inner join profesores p on c.idProfesor=p.id WHERE c.id=$this->id and c.eliminado=false";
   $result=mysqli_query($conexion,$sql);
   $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
   foreach($result as $registro) {
    
      //se consultan en los parametros
      $this->id=$registro['id'];
      $this->curso=$registro['curso'];
      $this->idProfesor=$registro['idProfesor'];
      $this->nombreprofesor=$registro['nombre']." ".$registro['apellido'];
      $this->fechaInicio=$registro['fechaInicio'];
      $this->fechaFin=$registro['fechaFin'];
      
    
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
     

 function actualizarcurso(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para actualizar el registro
  $sql="UPDATE cursos SET curso='$this->curso',
  idProfesor='$this->idProfesor',
  fechaInicio='$this->fechaInicio',
  fechaFin='$this->fechaFin' 
  WHERE id=$this->id";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}
function eliminarcurso(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para eliminar el registro
  $sql="UPDATE cursos SET eliminado=1 WHERE id=$this->id";
  // $sql="DELETE FROM estudiante WHERE id=$this->id";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}
}
?>