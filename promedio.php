<?php
class promedio{
  //para utilizar las conexiones del archivo  conexion.popover-header

    
  
    public $nota1;
    public $nota2;
    public $nota3;
    public $idMatricula;
    public $resultado;
    
     function calcularPromedio($nota1,$nota2,$nota3){
        $this->resultado = ($nota1+$nota2+$nota3)/3;
    }

  
    function listanotas(){
        $oconexion=new conectar();
        $conexion=$oconexion->conexion();
        $sql = "SELECT * FROM notas WHERE eliminado=false";
        //serive para ejecutar la funcion
        $result=mysqli_query($conexion,$sql);
        //organiza el resultado de la consola y lo retorno
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }

 function consultanotas(){
  $oconexion=new conectar();
   $conexion =$oconexion->conexion();
   $sql = "SELECT * FROM notas WHERE id=$this->id";
   $result=mysqli_query($conexion,$sql);
   $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
   foreach($result as $registro) {
    
      //se consultan en los parametros
      $this->id=$registro['id'];
      $this->idMatricula=$registro['idMatricula'];
      $this->nota1=$registro['nota1'];
      $this->nota2=$registro['nota2'];
      $this->nota3=$registro['nota3'];
    
    }
  }
  function actualizarnotas(){
    //se instancia el objeto conectar
    $oconexion= new conectar();
    //se establece conexión con la base de datos
    $conexion=$oconexion->conexion();
    //consulta para actualizar el registro
    $sql="UPDATE notas SET idMatricula='$this->idMatricula',
    nota1='$this->nota1',
    nota2='$this->nota2',
    nota3='$this->nota3' 
    WHERE id=$this->id";
    //se ejecuta la consulta
    $result=mysqli_query($conexion,$sql);
    return $result;
  }
  function eliminanotas(){
    //se instancia el objeto conectar
    $oconexion= new conectar();
    //se establece conexión con la base de datos
    $conexion=$oconexion->conexion();
    //consulta para eliminar el registro
    $sql="UPDATE notas SET eliminado=1 WHERE id=$this->id";
    // $sql="DELETE FROM estudiante WHERE id=$this->id";
    //se ejecuta la consulta
    $result=mysqli_query($conexion,$sql);
    return $result;
  }
}

?>