<?php
require 'head.php';
?>



<!DOCTYPE html>
<html lang="en">

<body style="background-color:lemonchiffon;">
  <div class="container" id="img1">
    
    <center>
      <form action="crearprofesor.php" method="GET" id="color">
        <div class="col-sm-3">

          <h3>nombre</h3>
          <input type="text" name="nombre">

        </div>
        <div class="col-sm-3">
          <h3>apellido</h3>

          <input type="text" name="apellido">

        </div>
        <div class="col-sm-3">
          <h3>direccion</h3>

          <input type="text" name="direccion">
        </div>
        <div class="col-sm-3">
          <h3>telefono</h3>

          <input type="number" name="telefono">
        </div>

        <div class="col-sm-3"><br>
         <input type="submit" value="ejecutar" onclick="datos()">


        </div><br>
        
      </form>
  </div>
  </center>
</body>

</html>