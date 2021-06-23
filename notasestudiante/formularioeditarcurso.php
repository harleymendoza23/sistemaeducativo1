<?php 
require_once 'profesor.php';
require_once 'conexion.php';
$oprofesor= new profesor();
$listaprofe = $oprofesor->listarprofesor();
?>



<?php

//se hace referencia a los archivos estudiante y conexion
require_once 'curso.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oCurso=new cursos();
//se recibe el parametro del enlace
$oCurso->id=$_GET['id'];
$registro=$oCurso->consultarcurso();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>editar curso</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body>
    <form action="editarcurso.php" method="get">
    <div class="container">
        <div class="row">
        <input type="text" name="id" value="<?php echo $oCurso->id; ?>" style="display:none;">
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">curso</label>
            <input class="form-control" type="text" name="curso" value="<?php echo $oCurso->curso; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Profesor</label>
            <select class="form-select" name="idProfesor" id="">
                       
                       <option value=""disabled selected>profesores</option>
                       <?php foreach($listaprofe as $registro){
                       ?>
                       <option value="<?php echo $registro['id'];?>" <?php if ($oCurso->idProfesor==$registro['id']){echo "selected";} ?>><?php echo $registro['nombre']," ",$registro['apellido']?></option>
                       <?php
                       
                       }?>
                   </select>
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">fechaInicio</label>
            <input class="form-control" type="date" name="fechaInicio" value="<?php echo $oCurso->fechaInicio; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">fechaFin</label>
            <input class="form-control" type="date" name="fechaFin" value="<?php echo $oCurso->fechaFin; ?>">
            </div>
            
        </div>
         <br>
        <input type="submit" class="btn btn-success" value="Guardar">
        <a href="listarcurso.php" class="btn btn-outline-info">volver</a>
        <a href="botones.html" class="btn btn-outline-info">pagina principal</a>
    </div>
    </form>
</body>
</html>