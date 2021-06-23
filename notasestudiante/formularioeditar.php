<?php

//se hace referencia a los archivos estudiante y conexion
require_once 'estudiante.php';
require_once 'conexion.php';
//se instancia el objeto estudiante
$oEstudiante=new estudiante();
//se recibe el parametro del enlace
$oEstudiante->id=$_GET['id'];
$registro=$oEstudiante->ConsultarEstudiante();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>editar estudiante</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body>
    <form action="editar.php" method="get">
    <div class="container">
        <div class="row">
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Tipo Documento</label>
            <input type="text" name="id" value="<?php echo $oEstudiante->id; ?>" style="display:none;">
            <select class="form-select" name="tipoDocumento" id="">
                <option value="" disabled selected>Selecciones una opción</option>
                <option value="RC" <?php if($oEstudiante->tipoDocumento=="RC"){ echo "selected";} ?> >Registro Civil</option>
                <option value="TI" <?php if($oEstudiante->tipoDocumento=="TI"){ echo "selected";} ?> >Tarjeta de Identidad</option>
                <option value="CC" <?php if($oEstudiante->tipoDocumento=="CC"){ echo "selected";} ?> >Cedula Ciudadanía</option>
                <option value="CE" <?php if($oEstudiante->tipoDocumento=="CE"){ echo "selected";} ?> >Cedula Extranjería</option>
            </select>
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Documento identidad</label>
            <input class="form-control" type="text" name="documento"  value="<?php echo $oEstudiante->documento; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Nombres</label>
            <input class="form-control" type="text" name="nombres" value="<?php echo $oEstudiante->nombre; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" value="<?php echo $oEstudiante->apellido; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Dirección</label>
            <input class="form-control" type="text" name="direccion" value="<?php echo $oEstudiante->direccion; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Telefono</label>
            <input class="form-control" type="text" name="telefono" value="<?php echo $oEstudiante->telefono; ?>">
            </div>
            
        </div>
         <br>
        <input type="submit" class="btn btn-success" value="Guardar">
</div>
    </form>
</body>
</html>