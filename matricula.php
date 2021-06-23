<?php 
class matricula{

    public $id=0;
    public $idCurso="";
    public $curso="";
    public $nombreEstudiante="";
    public $apellidoEstudiante="";
    public $idEstudiante="";
    public $nombreProfesor="";
    public $apellidoProfesor="";
    public $idProfesor="";
    public $NotaFinal="";
    
    

    
    function consultarMatricula(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM matricula WHERE idCurso=$this->idCurso AND idEstudiante=$this->idEstudiante";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }
    function consultarEstudiantePorId(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT e.nombres,e.apellidos FROM matricula m INNER JOIN estudiante e ON e.id=m.idEstudiante WHERE m.id=$this->id";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        foreach ($result as $registro){
            $this->nombreEstudiante=$registro['nombres'];
            $this->apellidoEstudiante=$registro['apellidos'];
            // $this->notaFinal=$registro['notaFinal'];
        }
    }

    function registrarnotafinal(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE matricula SET NotaFinal=$this->NotaFinal WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }


    function consultarMatriculaPorId(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM matricula WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as $registro){
            $this->id=$registro['id'];
            $this->idCurso=$registro['idCurso'];
            $this->curso=$registro['curso'];
            $this->idEstudiante=$registro['idEstudiante'];
        }
    }
    function nuevoMatricula(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();

        $existe=$this->consultarMatricula();
        if(sizeof($existe)!=0){
            $sql="UPDATE matricula SET  eliminado=false WHERE idCurso=$this->idCurso AND idEstudiante=$this->idEstudiante";
        }else{
            $sql="INSERT INTO matricula (idCurso,idEstudiante)
            VALUES ($this->idCurso,$this->idEstudiante)";
        }
        $result=mysqli_query($conexion,$sql);
        return $result;
    }
    
    function listarestudiante(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT m.id,e.nombres,e.apellidos,m.NotaFinal,m.idCurso FROM matricula m INNER JOIN estudiante e ON e.id=m.idEstudiante WHERE m.idCurso=$this->idCurso";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $result;

    }


}

?>