<?php
require 'head.php';
?>




<!DOCTYPE html>
<html lang="en">

<body style="background-color:lemonchiffon;">
  <div class="container" id="img1">
    
    <center>
      <form action="crearrol.php" method="GET" idRol="color">
        <div class="col-sm-3">

          <h4>rol</h4>
          <input type="text" name="nombreRol">

      </div>
        
        <div class="col-sm-3"><br>
         <input type="submit" value="ejecutar" onclick="datos()">


        </div><br>
        
      </form>
  </div>
  </center>
</body>

</html>