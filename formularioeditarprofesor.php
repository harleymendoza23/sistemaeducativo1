<?php

//se hace referencia a los archivos estudiante y conexion
require_once 'profesor.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oProfesor=new profesor();
//se recibe el parametro del enlace
$oProfesor->id=$_GET['id'];
$registro=$oProfesor->consultarProfesor();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>editar profesor</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body>
    <form action="editarprofesor.php" method="get">
    <div class="container">
        <div class="row">
      
            <input type="text" name="id" value="<?php echo $oProfesor->id;?>" style="display:none;">
            
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Nombres</label>
            <input class="form-control" type="text" name="nombre" value="<?php echo $oProfesor->nombre; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Apellidos</label>
            <input class="form-control" type="text" name="apellido" value="<?php echo $oProfesor->apellido; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Dirección</label>
            <input class="form-control" type="text" name="direccion" value="<?php echo $oProfesor->direccion; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Telefono</label>
            <input class="form-control" type="text" name="telefono" value="<?php echo $oProfesor->telefono; ?>">
            </div>
            
        </div>
         <br>
        <input type="submit" class="btn btn-success" value="Guardar">
        <a href="listarprofesor.php" class="btn btn-outline-info">volver</a>
        <a href="botones.html" class="btn btn-outline-info">pagina principal</a>
    </div>
    </form>
</body>
</html>