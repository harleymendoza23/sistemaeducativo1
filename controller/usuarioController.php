<?php

//esta función almacena que operación quiere el usuario
$funcion=""; //Me permite verificar su la variable esta vacia
//El if diferenciar metodo POST o GET o ninguno. AL CONTROLER SE LE HA ESTADO ENVIANDO GET O POST
if (isset($_POST['funcion'])){ //SI ESTA DEFINIDA Y SU VALOR ES DIFERENTE A NULO(ISSET), ALMACENA EN LA VARIABLE FUNCION
    $funcion=$_POST['funcion'];
}else{ if (isset($_GET['funcion'])){
    $funcion=$_GET['funcion'];
}
}
//solo va a hacer este caso
$oUsuario=new usuarioController();

switch($funcion){
    case "registrar":
        $oUsuario->registrarUsuario();
        break;
    case "iniciarSesion":
        $oUsuario->iniciarSesion();

        break;
     case "registrarUsuarioEnRol":
            $oUsuario->registrarUsuarioPorRol();
            break;
    
      case "cerrarSesion":
         $oUsuario->cerrarSesion();
         break; 

         
          

}


//clase usuarioController.php genera la comunicación entre la vista y el modelo
//contiene las funciones necesarias para alimentar la vista
class usuarioController{

    //función para registrar el usuario
    public function registrarUsuario(){
        require_once '../usuario.php';
        $oUser= new usuario();
        $nombre=$_POST['nombre'];
        $correoElectronico=$_POST['correoElectronico'];
        $contrasena=$_POST['contrasena'];
        $confirmContrasena=$_POST['confirmContrasena'];
        if($contrasena==$confirmContrasena){
            //si son iguales las contraseña y confirma contraseña se va a generar el registro
            if($oUser->consultarCorreoElectronico($correoElectronico)==0){
                //se registra al usuario
                $result=$oUser->registroUsuario($nombre,$correoElectronico,$contrasena);
                if($result){
                    header ("location: ../listausuarios.php");
                }else{
                    echo "error al momento de registrar el usuario";
                }
            }else{
                // existe un registro con este correo electronico
                echo "ya existe un registro con este correo electronico";
            }
        }else{
            //si són diferentes le vamos a indicar al usuario que no son iguales
            //no se genera el registro
            echo "la contraseña y confirmación de la contraseña no coinciden";
        }
    }


    public function iniciarSesion(){
        require_once '../usuario.php';

        session_start();
        $oUser=new usuario();
        $correoElectronico=$_POST['correoElectronico'];
        $contrasena=$_POST['contrasena'];
        $oUser->iniciarSesion($correoElectronico, $contrasena);
        if($oUser->getIdUser()!=""){
            $_SESSION['idUser']=$oUser->getIdUser();
            $_SESSION['nombre']=$oUser->getNombreUser();
            header("location:../botones.php");

        }else{
            echo"usuario o contraseña incorrecta";
        }
    }

    public function registrarUsuarioPorRol(){

        $idRol=$_GET['idRol'];
        $idUser=$_GET['idUser'];

        require_once '../usuario.php';

        $oUsuario=new usuario();
        $result=$oUsuario->actualizarUsuarioDeRol($idRol, $idUser);
        if ($result){
            header("location: ../detallerol.php?idRol=$idRol");
        }else{
            echo "Error al registrar el usuario";
        }

    }

    public function cerrarSesion(){
        session_start();
        session_unset(); //borra las variables de sesion
        session_destroy(); //destruye o elimina la sesion
        header("location: ../user/login.php");
        die();
    }
  public function verificarPermisoUrl($url){
    require_once 'usuario.php';
    $oUsuario=new usuario();
    $idRol=$oUsuario->getRolUsuario($_SESSION["idUser"]);
    require_once 'permiso.php';
    $opermiso=new permiso();
    $opermiso->idRol=$idRol;
    $opermiso->url=$url;
    if(sizeof($opermiso->verificarpermisourl())==0){
    // header("location: error/401.php");
    }
  }
   
}

?>