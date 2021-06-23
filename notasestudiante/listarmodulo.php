
<?php
require 'head.php';
?>
<html>

    
    
  <table class="table">
    <thead>
      <tr>
       <th><center><h2>MODULO</h2></center></th>
    </tr>
    </thead>
  
     
         <tr >
           <th>nombre modulo</th>
           
           <!-- estos son los iconos<i class="fas fa-plus"></i> -->

           <th><a  href="nuevomodulo.php"><i class="fas fa-plus"></i> nuevo</a></th>
           
           
          </tr>
   </thead>

   <body>
   <?php
     require_once 'modulo.php';
     require_once 'conexion.php';
     $oconexion=new conectar();
     $oconexion=$oconexion->conexion();
     $omodulo=new modulo();
     $consulta=$omodulo->listarmodulo();
     foreach ($consulta as $registro){
       
        ?>
        <!-- en este codigo se trabaja html con php -->
        <tr class="table-primary">
          <td><?php echo $registro ['nombreModulo'];?> </td>
          
          <th>
            <a href="/NOTASESTUDIANTE/formularioeditar.php?id=<?php echo $registro['id'];?>" class="btn btn-warning" href="estudiante.html"><i class="fas fa-edit"></i> editar</a>

           <!-- esta parte sirve para mostrarle al cliente los comentarios de si esta seguro de eliminar -->

            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger" onclick="eliminar(<?php echo $registro ['idModulo']; ?>);" ><i class="fas fa-trash"></i> eliminar</a>
            <a href="http://localhost/NOTASESTUDIANTE/detallemodulo.php?idModulo=<?php echo $registro['idModulo']; ?>" class="btn btn-light"><i class="fas fa-address-card"></i> Detalle</a>
          </th>
        </tr>
      <?php

     }


     ?>


    </body>
 </table>
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
        esta seguro que quiere eliminar el modulo
      </div>
      <div class="modal-footer">
        <form action="eliminarmodulo.php" method="get">
          <input type="" name="idModulo" id="eliminar" style="display:none;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
        <button type="submit" class="btn btn-danger">eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function eliminar(idModulo){
    document.getElementById('eliminar').value=idModulo;
  }
</script>