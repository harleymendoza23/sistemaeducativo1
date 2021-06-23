<?php

//se hace referencia a los archivos estudiante y conexion
require_once 'usuario.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oUser=new usuario();
//se recibe el parametro del enlace
$oUser=$oUser->getIdUser();
     foreach ($oUser as $registro)

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>editar usuario</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body>
    <form action="editar.php" method="get">
    <div class="container">
        <div class="row">
           
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">nombre</label>
            <input class="form-control" type="text" name="nombre"  value="<?php echo $oUser->nombre; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">correo electronico</label>
            <input class="form-control" type="text" name="correoElectronico" value="<?php echo $oUser->correoElectronico; ?>">
            </div>
            
           
            
        </div>
         <br>
        <input type="submit" class="btn btn-success" value="Guardar">
</div>
    </form>
</body>
</html>