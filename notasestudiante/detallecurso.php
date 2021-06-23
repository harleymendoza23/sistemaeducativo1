<?php 
require_once 'profesor.php';
require_once  'curso.php';
require_once 'conexion.php';
require_once 'matricula.php';
require_once 'nota.php';
// $onota=new nota();
// $onota->$id=$_GET['id'];
// $consultarNota=$onota->consultarNota();

$oprofesor= new profesor();
$listaprofe = $oprofesor->listarprofesor();
$oCurso= new cursos();
$oCurso->id=$_GET['id']; 
$listacurso = $oCurso->consultarcurso();

$oMatricula=new matricula();
$oMatricula->idCurso=$_GET['id'];
$listarmatricula=$oMatricula->listarestudiante();
?>
<?php
require 'head.php';
?>

<!DOCTYPE html>
<html lang="en">


     <body>

     <div class="container">
     
     
     <input type="text" name="id" value="<?php echo $oCurso->id; ?>" style="display:none;">
      <form action="crearmatricula2.php" method="get">
      <label for="">Profesor</label>
      <input class="form-control" type="text" name="nombre"  value="<?php echo $oCurso->nombreprofesor; ?>" disabled>
      <label for="">cursos</label>
      <input class="form-control" type="text" name="curso"  value="<?php echo $oCurso->curso; ?>" disabled>
      <table class="table">
      <thead>
         <tr >
           
           <th>nombre</th>
           <th>apellido</th>
           <th>nota</th>
           <th></th>
           
    
          
          </tr>
          <?php 
          
         
          foreach ($listarmatricula as $registro){
            // foreach ($consultarNota as $registro){

           
            
             ?>
             <!-- en este codigo se trabaja html con php -->
             <tr class="table-primary">
               <td><?php echo $registro ['nombres'];?> </td>
               <td><?php echo $registro ['apellidos'];?> </td>
               <td><?php echo $registro ['NotaFinal'];?> </td>
             <th><a href="/NOTASESTUDIANTE/listarnota.php?id=<?php echo $registro['id'];?>&idCurso=<?php echo $registro['idCurso']; ?>" class="btn btn-light" ><i class="fas fa-share"></i>notas</a></th>
  
             </tr>
           <?php
     
          }
       
     
     
          ?>
         
   </thead>
</table>


                           
                          <a href="nuevamatricula.php?id=<?php echo $oCurso->id; ?>"  class="btn btn-info"><i class="fas fa-share"></i>matricular</a>
                           <a href="listarcurso.php" class="btn btn-outline-info"><i class="fas fa-undo-alt"></i>volver</a>
                          
                    </form>
    </div>
    
</body>
</html>

