<?php   
require_once 'matricula.php';
require_once 'conexion.php';
require_once 'estudiante.php';
require_once 'curso.php'

?>
<?php
require 'head.php';
?>
<html>

<body>


<div class="container">
<h1>Nueva Matricula</h1>

    
    
        <div class="row">
        
        <?php 
        $oEstudiante=New estudiante();
        $result=$oEstudiante->listarestudiante();
        
        ?>

        <form action="crearmatricula2.php" method="GET">
        <input type="text" name="idCurso" value="<?php echo $_GET['idCurso']; ?>" style="display:none;">


        <div class="col-sm-3">
        <input type="text" name="idCurso" value="<?php echo $_GET['id']; ?>" style="display:none;">
            <h3>Estudiante: </h3>
            <select class="form-select" name="idEstudiante" id="">
            <option value="" disabled selected>Selecciones una opción</option>
            <?php foreach($result as $registro){
            ?>
            <option value="<?php echo $registro['id'];?>"><?php echo $registro['nombres']." ".$registro['apellidos'];?></option>
            <?php
            }
            ?>
            </select>
            
        </div>
        
            
            <br>
            <input type="submit" class="btn btn-info" value="Guardar" >
            <a href="detallecurso.php?id=<?php echo $_GET['id']?>" class="btn btn-outline-info"><i class="fas fa-undo-alt"></i>volver</a>
    
       
    




</div>
</body>

</html>


