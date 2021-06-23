<?php 
session_start();
if (isset($_SESSION['idUser'])){
  header("location: ../botones.html");
  die();
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="/notasestudiante/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></link>
        <script src="/notasestudiante/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>cursos</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Bienvenido</b>
  </div>
  <div class="card">
    <div class="card-body">
      <p class="login-box-msg">Inicia sesión para continuar</p>
        <p style="color:#FE2D00;">
     <form action="../controller/usuarioController.php" method="POST">
        <label for="">Correo electronico</label>
        <input class="form-control" type="email" name="correoElectronico">
        <label for="">Contraseña</label>
        <input class="form-control" type="password" name="contrasena">
        <br>
        <button type="submit" class="btn btn-success" name="funcion" value="iniciarSesion">Iniciar Sesión</button>
    </form>
    <p class="mb-1">
        <a href="recuperarContrasena.php">¿Olvidó su contraseña?</a>
      </p>
      <p class="mb-0">
        <a href="registro.php" class="text-center">¿No tiene usuario?</a>
      </p>
    </div>
    
  </div>
</div>

</body>
</html>