<?php
  
  require_once 'estudiante.php';
  require_once 'conexion.php';
  require_once 'matricula.php';
  require_once 'curso.php';
  require_once 'nota.php';
  $oMatricula=new matricula();
  $oMatricula->id=$_GET['id'];
  $oMatricula->consultarEstudiantePorId();
//   consulta de curso
  
  
  
  $onota=new nota();

  if (isset($_GET['nota1'])){
    
    
    $onota->nota1=$_GET['nota1'];
    $onota->nota2=$_GET['nota2'];
    $onota->nota3=$_GET['nota3'];
    $onota->promedio=$_GET['promedio'];
    
    $result=$onota->nuevoNota();
    echo $result;
  }else{
    
    $onota->idMatricula=$_GET['id'];
    $onota->consultarNota();
  }
?>

<?php
require 'head.php';
?>

<!DOCTYPE html>
<html lang="es">



<body  style="background-color:lemonchiffon;">

<div class="container">


<form  action="crearnota.php" method="GET">
<!-- imput ocultos -->

<input type="text" name="idMatricula" value="<?php echo $onota->idMatricula; ?>" style="display:none;">
<input type="text" name="idCurso" value="<?php echo $_GET['idCurso']; ?>" style="display:none;">


    <div class="row">
        <div class="col col-6">
        <h1>estudiante: </h1>
        <input class="form-control" type="text" name="nombre"  value="<?php echo $oMatricula->nombreEstudiante.' '.$oMatricula->apellidoEstudiante;?>" disabled>
        </div>
    </div>
    
    <br>

    <div class="row">
        <div class="col col-4">
            <h4>Nota 1: </h4>
            <input class="form-control" type="number" id="nota1" name="nota1" value="<?php echo $onota->nota1; ?>">
        </div>
        <div class="col col-4">
            <h4>Nota 2: </h4>
            <input class="form-control" type="number" id="nota2" name="nota2" value="<?php echo $onota->nota2; ?>">
        </div>
        <div class="col col-4">
            <h4>Nota 3: </h4> 
            <input class="form-control" type="number" id="nota3" name="nota3" value="<?php echo $onota->nota3; ?>">
        </div>
        <div class="col col-4">
            <h4>Promedio: </h4>
            <input class="form-control" type="number" step="0.1" id="notafinal" name="promedio" value="<?php echo $onota->promedio; ?>"disabled>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="calculo()"  value="promedio" ><i class="fas fa-share" ></i>Promedio</button>
    <input type="submit" class="btn btn-success" value="Guardar">
   
    <a href="detallecurso.php?id=<?php echo $_GET['idCurso']?>" class="btn btn-outline-info"><i class="fas fa-undo-alt"></i>volver</a>
    
    </form>



  
</body>
</html>


<script>

    function calculo(){

    var nota1=parseFloat(document.getElementById("nota1").value);
    var nota2=parseFloat(document.getElementById("nota2").value);
    var nota3=parseFloat(document.getElementById("nota3").value);
    
    var promedio=(nota1+nota2+nota3)/3;
    
    document.getElementById("notafinal").value=promedio.toFixed(1);
    

}
    </script>