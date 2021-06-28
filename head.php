<?php 
require_once 'controller/usuarioController.php';
$oUserController=new usuarioController();
session_start();

if(!isset($_SESSION['idUser'])){
    header("location: user/login.php");
    die();
}elseif(isset($_SESSION['idUser'])){
$url=str_replace("/NOTASESTUDIANTE","",$_SERVER['REQUEST_URI']);
$url=(explode("?",$url))[0];
$oUserController->verificarPermisoUrl($url);
}




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/NOTASESTUDIANTE/css/bootstrap.min.css" rel="stylesheet" >
    <link href="/NOTASESTUDIANTE/css/all.min.css" rel="stylesheet">

    
    
    <script src="/NOTASESTUDIANTE/js/bootstrap.min.js"></script>
    <script src="/NOTASESTUDIANTE/js/popper.min.js"></script>
    <script src="/NOTASESTUDIANTE/js/jquery-3.6.0.min.js"></script>
 
    <title>Sistema Estudiante</title>
</head>
<body background="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <strong><a class="navbar-brand" href="http://localhost/NOTASESTUDIANTE/botones.php"><i class="fas fa-university"></i>  INICIO</a></strong>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <nav>
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="http://localhost/NOTASESTUDIANTE/listarusuarios.php" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong><i class="fas fa-users-cog"></i> Administrador</strong></a>
                    <ul class="dropdown-menu dropdown-menu-ligth" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a href="http://localhost/NOTASESTUDIANTE/listausuarios.php" class="nav-link active" aria-current="page"><i class="fas fa-user"></i> Usuario</a></li>
                      <li><a href="http://localhost/NOTASESTUDIANTE/listarrol.php" class="nav-link active" aria-current="page"><i class="fas fa-user-tag"></i> Roles</a></li>
                      <li><a href="http://localhost/NOTASESTUDIANTE/listarmodulo.php" class="nav-link active" aria-current="page"><i class="fas fa-layer-group"></i> Modulos</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><strong><a class="nav-link active" aria-current="page" href="http://localhost/NOTASESTUDIANTE/listartabla.php"><i class="fas fa-user-graduate"></i> Estudiantes</a></strong></li>
            <li class="nav-item"><strong><a class="nav-link active" aria-current="page" href="http://localhost/NOTASESTUDIANTE/listarprofesor.php"><i class="fas fa-chalkboard-teacher"></i>Profesor</a></strong></li>
            <li class="nav-item"><strong> <a class="nav-link active" aria-current="page" href="http://localhost/NOTASESTUDIANTE/listarcurso.php"><i class="fab fa-discourse"></i> Cursos</a></strong></li>
          </ul>
          
          <form class="d-flex">
            <!-- Bienvenido <?php echo $_SESSION['nombreUser'] ?> -->
            <a href="controller/usuarioController.php?funcion=cerrarSesion" class="btn btn-ligth"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
          </form>
        </div>
      </div>
    </nav>
    <br>