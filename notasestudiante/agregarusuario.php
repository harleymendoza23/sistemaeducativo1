<?php
require 'head.php';
?>
<!DOCTYPE html>
<html lang="es">

<body class="hold-transition login-page" >
<div class="login-box">
  
  <div class="card">
   
      
        </p>
        <center>
      <form action="controller/usuarioController.php" method="post">
      <label for="">nombre usuario</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="nombre" placeholder="nombre" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <label for="">correo electronico</label>
          <input type="email" class="form-control" name="correoElectronico" placeholder="Correo electronico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <label for="">contraseña</label>
          <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <label for="">confirmar contraseña</label>
          <input type="password" name="confirmContrasena" class="form-control" placeholder="Confirmación Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
          

          
          <!-- /.col -->
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary btn-block" name="funcion" value="registrar">guardar</button>
          </div>
          <!-- /.col -->
       
      </form>
</center>

      

      
    </div>
    
  </div>
</div>



</body>
</html>