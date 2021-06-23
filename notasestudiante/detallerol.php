<?php 
require_once 'roles.php';
           
require_once 'usuario.php';
require_once 'conexion.php';



$orol= new rol();
$orol->idRol=$_GET['idRol']; 
$listarrol = $orol->consultarrol();

?>

<?php
require 'head.php';
?>

<!DOCTYPE html>
<html lang="en">

<table class="table">
    <thead>
      <tr>
       <th><center><h2>DETALLE DE ROL</h2></center></th>
    </tr>
    </thead>
  
     
         <tr >
           <th>nombre</th>
           <th>correo electronico</th>
           
           <!-- estos son los iconos<i class="fas fa-plus"></i> -->

           <th><a href="/NOTASESTUDIANTE/nuevousuario.php?idRol=<?php echo $_GET['idRol'];?>" class="btn btn-info" ><i class="fas fa-search-plus"></i> agregar usuario</a></th>
           
           
          </tr>
   </thead>
     <body>
    

     <div class="container">
     
     
     <input type="text" name="idRol" value="<?php echo $orol->idRol; ?>" style="display:none;">
     
     
      
      <input class="form-control" type="text" name="nombreRol"  value="<?php echo $orol->nombreRol; ?>" disabled>
      <table class="table">
      <?php
     require_once 'estudiante.php';
     require_once 'conexion.php';
     $oconexion=new conectar();
     $oconexion=$oconexion->conexion();
     $ousuario=new usuario();
     $consulta=$ousuario->listarusuarioporrol($orol->idRol);
     foreach ($consulta as $registro){
     
       
        ?>
      
       <!-- en este codigo se trabaja html con php -->
       <tr class="table-primary">
         <td><?php echo $registro ['nombre'];?> </td>
         <td><?php echo $registro ['correoElectronico'];?> </td>
      
         
       </tr>
     <?php

    }
    ?>
</table>


                           
                          
                           <a href="listarrol.php" class="btn btn-outline-info"><i class="fas fa-undo-alt"></i>volver</a>
                          
                    
    </div>
    
</body>
</html>

