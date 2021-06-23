<?php
require 'head.php';
?>

<html>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Bienvenido</b>
  </div>
  <div class="card">
    <div class="card-body">
      <p class="login-box-msg">Nuevo Usuario</p>
        <p style="color:#FE2D00;">
      
        </p>
      <form action="controller/usuarioController.php" method="post">
      <div class="input-group mb-3">
          <label for="">nombre usuario</label>
          <input  type="text" class="form-control" name="nombre" placeholder="nombre" required>
          
        </div>
        <div class="input-group mb-3">
            <label for="">correo electronico</label>
          <input type="email" class="form-control" name="correoElectronico" placeholder="Correo electronico" required>
          
        </div>
        <div class="input-group mb-3">
            <label for="">contraseña</label>
          <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
          
        </div>
        <div class="input-group mb-3">
            <label for="">confirmar contraseña</label>
          <input type="password" name="confirmContrasena" class="form-control" placeholder="Confirmación Contraseña" required>
          
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary btn-block" name="funcion" value="registrar">Entrar</button>
      </form>

      

     
    </div>
    
  </div>
</div>



</body>
</html>