<?php

require_once 'conexion.php';

class usuario
{
    //el modificador private no permite acceder a los atributos fuera de la clase
    //atributos del modelo usuario
    //$idUser almacerá el id del usuario de la base datos
    private $idUser="";
    private $nombre="";
    private $correoElectronico="";
    private $contrasena="";
    private $idRol="";

    //para obtener la información de IdUser
    public function getIdUser(){
        return $this->idUser;
    }
    public function getNombreUser(){
        return $this->nombre;
    }
    public function setIdUser($idUser){
        $this->idUser=$idUser;
    }
    public function setNombreUser($nombre){
        $this->nombre=$nombre;
    }
    public function getIdRol(){
        return $this->idRol;
    }
    public function setIdRol($idRol){
        $this->idRol=$idRol;
    }

    //función que gestiona el registro de los usuario
    //las variables dentro de los parentesis son parametros que se requieren dar al momento de llamar la función
    public function registroUsuario($nombre,$correoElectronico,$contrasena){
        //función para encriptar la contraseña utilizando el metodo md5
        $contrasenaMd5=md5($contrasena);
        $oConexion=new conectar();
        //se genera la conexión con la base de datos
        $Conexion=$oConexion->conexion();
        //se crea la sentencia sql para registrar el usuario
        $sql="INSERT INTO usuario (nombre,correoElectronico,contrasena,resetContrasena,idRol,eliminado)
        VALUES ('$nombre','$correoElectronico','$contrasenaMd5',0,null,false)";
        //ejecuta la sentencia
        $result=mysqli_query($Conexion,$sql);
        //
        return $result;
    }
    //se verifica si ya hay un registro con el correo electronico 
    public function consultarCorreoElectronico($correoElectronico){
        //generar la conexión
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM usuario WHERE correoElectronico='$correoElectronico'";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
        return count($result);

    }
       //función para consultar si el correo electronico y la contraseña son correctos
       //para buscar el registro
       public function iniciarSesion($correoElectronico,$contrasena){
        //función para encriptar la contraseña utilizando el metodo md5
        $contrasenaMd5=md5($contrasena);
        //generar la conexión
        $oConexion=new conectar();
        //establece conexión con la base datos
        $conexion=$oConexion->conexion();
        //sentencia para verificar correo y contraseña del usiario
        $sql="SELECT * FROM usuario WHERE correoElectronico='$correoElectronico' and contrasena='$contrasenaMd5'";
        //se ejecuta la sentencia
        $result=mysqli_query($conexion,$sql);
        //se almacena la consulta en un arreglo asociativo
        $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($result as $registro){
            $this->idUser=$registro['idUser'];
            $this->nombre=$registro['nombre'];
        }
        return count($result);

    }
    function listarusuario(){
        $oconexion=new conectar();
        $conexion=$oconexion->conexion();
        $sql = "SELECT * FROM usuario WHERE eliminado=false";
        //serive para ejecutar la funcion
        $result=mysqli_query($conexion,$sql);
        //organiza el resultado de la consola y lo retorno
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }

    function listarusuarioporrol($idRol){
        $oconexion=new conectar();
        $conexion=$oconexion->conexion();
        $sql = "SELECT * FROM usuario WHERE idRol=$idRol and  eliminado=false";
        //serive para ejecutar la funcion
        $result=mysqli_query($conexion,$sql);
        //organiza el resultado de la consola y lo retorno
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }
    function mostrarUsuariosPorIdDiferente($idRol){
        //Instancia clase conectar
        $oConexion=new conectar();
        //Establece conexion con la base de datos.
        $conexion=$oConexion->conexion();
        
        //esta consulta nos permite conocer a los usuarios que no estan registrados en ese tol
        $sql="SELECT * FROM usuario WHERE idRol IS NULL OR idRol!=$idRol AND eliminado=false";
            
        //se ejecuta la consulta en la base de datos
        $result=mysqli_query($conexion,$sql);
        //organiza resultado de la consulta y lo retorna
        return mysqli_fetch_all($result, MYSQLI_ASSOC); 
        }

        
    function actualizarUsuarioDeRol($idRol, $idUser){
        //Instancia clase conectar
        $oConexion=new conectar();
        //Establece conexion con la base de datos.
        $conexion=$oConexion->conexion();

        $sql="UPDATE usuario SET idRol=$idRol WHERE idUser=$idUser";
        //se ejecuta la consulta
        $result=mysqli_query($conexion,$sql);
        return $result;
    }
    function eliminarusuario(){
        //se instancia el objeto conectar
        $oconexion= new conectar();
        //se establece conexión con la base de datos
        $conexion=$oconexion->conexion();
        //consulta para eliminar el registro
        $sql="UPDATE usuario SET eliminado=1 WHERE idUser=$this->idUser";
        // $sql="DELETE FROM estudiante WHERE id=$this->id";
        //se ejecuta la consulta
        $result=mysqli_query($conexion,$sql);
        return $result;
      }
    public function getRolUsuario($idUser){
        $oConexion=new conectar();
        //Establece conexion con la base de datos.
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM usuario WHERE idUser=$idUser";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($result as $registro)
        {
            $this->idRol=$registro['idRol'];

        }
        return $this->idRol;
    }

}

?>