<?php 
require_once 'profesor.php';
require_once 'conexion.php';
$oprofesor= new profesor();
$listaprofe = $oprofesor->listarprofesor();
?>


<?php
require 'head.php';
?>




<!DOCTYPE html>
<html lang="en">

<body background="profesor.jpg"><center>
    <div class="container">
   
        <form action="crearcurso.php" method="GET">
            
                       <div class="col-sm-3">
               
                    <h4 style="color: aliceblue;" ;>nombre del curso</h4>
                    <input type="text" name="nombrecurso">
                    </div>
                    <div class="col-sm-3">
                    <h4 style="color: aliceblue;" ;>profesores</h4>
                   <select class="form-select" name="idProfesor" id="">
                       
                       <option value=""disabled selected>profesores</option>
                       <?php foreach($listaprofe as $registro){
                       ?>
                       <option value="<?php echo $registro['id'];?>"><?php echo $registro['nombre']," ",$registro['apellido']?></option>
                       <?php
                       
                       }?>
                   </select>
                   </div>
                   <div class="col-sm-3">
               
                    <h4 style="color: aliceblue;" ;>fecha inicio</h4>
                    <input type="date" name="fechaInicio">
                    </div>
                    <div class="col-sm-3">
                    <h4 style="color: aliceblue;" ;>fecha fin</h4>
                    <input type="date" name="fechaFin">
                    </div>
                    <input type="submit" value="ejecutar" class="btn btn-info" onclick="datos()">
                    
                
            
    </div>

    </form>
</body></center>

</html>