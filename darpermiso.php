<?php 
require_once 'roles.php';
           
require_once 'permiso.php';
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
       <th><center><h2>DAR PERMISO</h2></center></th>
    </tr>
    </thead>
  
     
         <tr >
           <th>paginas con permiso</th>
         
           <th><a href="/NOTASESTUDIANTE/agregarpermiso.php?idRol=<?php echo $_GET['idRol'];?>" class="btn btn-info" ><i class="fas fa-search-plus"></i> agregar permiso</a></th>

         
          </tr>
   </thead>
     <body>
    

     <div class="container">
     
     
     <input type="text" name="idRol" value="<?php echo $orol->idRol; ?>" style="display:none;">
     
     
      
      <input class="form-control" type="text" name="nombreRol"  value="<?php echo $orol->nombreRol; ?>" disabled>
      <table class="table">
      <?php
  
     require_once 'conexion.php';
     $oconexion=new conectar();
     $oconexion=$oconexion->conexion();
     $opermiso=new permiso();
     $consulta=$opermiso->listaPaginasConPermiso($orol->idRol);
     foreach ($consulta as $registro){
     
       
        ?>
      
       <!-- en este codigo se trabaja html con php -->
       <tr class="table-primary">
         <td><?php echo $registro ['nombre'];?> </td>
        
      <th>
      <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger" onclick="eliminar(<?php echo $registro ['id']; ?>);" ><i class="fas fa-trash"></i> eliminar</a>
      </th>
         
       </tr>
     <?php

    }
    ?>
</table>


                           
                          
    <a href="detallerol.php" class="btn btn-outline-info"><i class="fas fa-undo-alt"></i>volver</a>
                          
                    
    </div>
    
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">!!ELIMINAR!!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        esta seguro que quiere eliminar el permiso
      </div>
      <div class="modal-footer">
        <form action="eliminarpermiso.php" method="get">
        <input type="text" name="idRol" value="<?php echo $orol->idRol; ?>" style="display:none;">
          <input type="" name="id" id="eliminar" style="display:none;" >
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
        <button type="submit" class="btn btn-danger">eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function eliminar(id){
    document.getElementById('eliminar').value=id;
  }
</script>