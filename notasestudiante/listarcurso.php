<?php
require 'head.php';
?>




<html>
  
     
    
  <table class="table">
  <thead>
      <tr>
       <th><center><h2>CURSOS</h2></center></th>
    </tr>
    </thead>
  
   <thead>
         <tr >
           <th>curso</th>
           <th>Profesor</th>
           <th>fechaInicio</th>
           <th>fechaFin</th>
           <th><a class="btn btn-info" href="cursos.php"><i class="fas fa-plus"></i> nuevo</a> </th>
           <th></th>
          </tr>
   </thead>

   <body>
   <?php
     require_once 'curso.php';
     require_once 'conexion.php';
     $oconexion=new conectar();
     $oconexion=$oconexion->conexion();
     $oCurso=new cursos();
     $consulta=$oCurso->listarcurso();
     foreach ($consulta as $registro){
       
        ?>
        <!-- en este codigo se trabaja html con php -->
        <tr class="table-primary">
          <td><?php echo $registro ['curso'];?> </td>
          <td><?php echo $registro ['nombre']." ".$registro['apellido'];?> </td>
          
          <td><?php echo $registro ['fechaInicio'];?> </td>
          <td><?php echo $registro ['fechaFin'];?> </td>
          <th>
            <a href="/NOTASESTUDIANTE/formularioeditarcurso.php?id=<?php echo $registro['id'];?>" class="btn btn-warning"><i class="fas fa-edit"></i> editar</a>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger" onclick="eliminar(<?php echo $registro ['id']; ?>);" ><i class="fas fa-trash"></i> eliminar</a>
            
            <a href="/NOTASESTUDIANTE/detallecurso.php?id=<?php echo $registro['id'];?>" class="btn btn-info" ><i class="fas fa-search-plus"></i> detalle del curso</a>
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
        esta seguro que quiere eliminar el curso
      </div>
      <div class="modal-footer">
        <form action="eliminarcurso.php" method="get">
          <input type="" name="id" id="eliminar" style="display:none;">
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