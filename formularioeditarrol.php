<?php

//se hace referencia a los archivos estudiante y conexion
require_once 'roles.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$orol=new rol();
//se recibe el parametro del enlace
$orol->idRol=$_GET['idRol'];
$registro=$orol->consultarrol();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>editar rol</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body>
    <form action="editarrol.php" method="get">
    <div class="container">
        <div class="row">
      
            <input type="text" name="idRol" value="<?php echo $orol->idRol;?>" style="display:none;">
            
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">rol</label>
            <input class="form-control" type="text" name="nombreRol" value="<?php echo $orol->nombreRol; ?>">
            </div>
         
            
        </div>
         <br>
         
        <input type="submit" class="btn btn-success" value="Guardar">
        <a href="listarrol.php" class="btn btn-outline-info">volver</a>
        <a href="botones.php" class="btn btn-outline-info">pagina principal</a>
    </div>
    </form>
</body>
</html>