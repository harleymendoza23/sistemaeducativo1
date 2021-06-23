
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  
</head>
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
      <form action="../controller/usuarioController.php" method="post">
      <div class="input-group mb-3">
          <input type="text" class="form-control" name="nombre" placeholder="nombre" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="correoElectronico" placeholder="Correo electronico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirmContrasena" class="form-control" placeholder="Confirmación Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="funcion" value="registrar">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <p class="mb-1">
        <a href="recuperarContrasena.php">¿Olvidó su contraseña?</a>
      </p>
      <p class="mb-0">
        <a href="login.php" class="text-center">¿Quiere iniciar Sesión?</a>
      </p>
    </div>
    
  </div>
</div>



</body>
</html>