<?php 

           
require_once 'usuario.php';
require_once 'conexion.php';
?>
<?php
require 'head.php';
?>
<table class="table">
    <thead>
      <tr>
       <th><center><h2>usuario</h2></center></th>
    </tr>
    </thead>
  
     
         <tr >
           <th>nombre</th>
           <th>correo electronico</th>
           
           <!-- estos son los iconos<i class="fas fa-plus"></i> -->

           <th><a class="btn btn-info" href="agregarusuario.php"><i class="fas fa-plus"></i> nuevo</a> </th>
           
           
          </tr>
   </thead>
     <body>
    

     <div class="container">
     
     
     
     
     
      
      <?php
     require_once 'estudiante.php';
     require_once 'conexion.php';
     $oconexion=new conectar();
     $oconexion=$oconexion->conexion();
     $ousuario=new usuario();
     $consulta=$ousuario->listarusuario();
     foreach ($consulta as $registro){
     
       
        ?>
      
       <!-- en este codigo se trabaja html con php -->
       <tr class="table-primary">
         <td><?php echo $registro ['nombre'];?> </td>
         <td><?php echo $registro ['correoElectronico'];?> </td>
      
         <th>
           <a href="/NOTASESTUDIANTE/formularioeditarusuario.php?idUser=<?php echo $registro['idUser'];?>" class="btn btn-warning" href="estudiante.html"><i class="fas fa-edit"></i> editar</a>

          <!-- esta parte sirve para mostrarle al cliente los comentarios de si esta seguro de eliminar -->

           <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger" onclick="eliminar(<?php echo $registro ['idUser']; ?>);" ><i class="fas fa-trash"></i> eliminar</a>
         </th>
       </tr>
     <?php

    }
    ?>
</table>


                           
                          
                           <a href="formularioeditarrol.php" class="btn btn-outline-info"><i class="fas fa-undo-alt"></i>volver</a>
                          
                    
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
        esta seguro que quiere eliminar el rol
      </div>
      <div class="modal-footer">
        <form action="eliminarusuario.php" method="get">
          <input type="text" name="idUser" id="eliminar"  style="display:none;" >
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
        <button type="submit" class="btn btn-danger">eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function eliminar(idUser){
    document.getElementById('eliminar').value=idUser;
  }
</script>
