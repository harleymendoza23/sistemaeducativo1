<?php

class nota{
    public $id=0;
    public $idMatricula="";
    public $nota1="";
    public $nota2="";
    public $nota3="";
    
    public $idEstudiante="";
    public $promedio="";

    function nuevoNota(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();


        $sql="INSERT INTO notas (idMatricula,nota1,nota2,nota3,promedio,eliminado)
        VALUES ($this->idMatricula,$this->nota1,$this->nota2,$this->nota3,$this->promedio,false)";
        $result=mysqli_query($conexion, $sql);
        return $result;
    }

    Function listarNota(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM notas WHERE eliminado=false";
        $result=mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function consultarNota(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT n.id, n.nota1, n.nota2, n.nota3, promedio FROM notas n INNER JOIN matricula m ON m.id=n.idMatricula WHERE n.idMatricula=$this->idMatricula";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as $registro){
            $this->id=$registro['id'];
            $this->nota1=$registro['nota1'];
            $this->nota2=$registro['nota2'];
            $this->nota3=$registro['nota3'];
            $this->promedio=$registro['promedio'];
        }  
    }
  
    

    function actualizarNota(){
        $oConexion= new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE notas SET idMatricula='$this->idMatricula',
        nota1='$this->nota1',
        nota2='$this->nota2',
        nota3='$this->nota3',
        notaFinal='$this->notaFinal',
        promedio='$this->promedio'
        WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

    function eliminarnota(){
        $oConexion= new conectar();
        $conexion=$oConexion->conexion();
        $sql="DELETE FROM notas WHERE idMatricula=$this->idMatricula";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

}



?>