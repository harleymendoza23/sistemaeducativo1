<?php
require 'head.php';
require_once 'pagina.php';
require_once 'conexion.php';
require_once 'modulo.php';

$idModulo=$_GET['idModulo'];
$omodulo=new modulo();
$omodulo->idModulo=$_GET['idModulo'];
$omodulo->consultarmodulo();

?>

<html>
<head>
<title>Lista Pagina</title>
</head>

<body>

<div class="container">


<?php
  require_once 'pagina.php';

  $oPagina=new pagina();
  $oPagina->idModulo=$_GET['idModulo'];
  $consulta=$oPagina->ListarPagina();
?> 



<H1>Pagina</H1>
<br>

<div class="row">
  <div class="col">
    <h1>Modulo: </h1>
      <input class="form-control" type="text" value="<?php echo $omodulo->nombreModulo; ?> " disabled>
  </div>
</div>

<br>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre_Pagina</th>
            <th>Enlace</th>
            <th><a class="btn btn-info" href="nuevapagina.php?idModulo=<?php echo $_GET['idModulo']; ?>"><i class="fas fa-user-plus"></i> Nuevo</a></th>
        </tr>
    </thead>

    <tbody>
    <?php
  
    foreach($consulta as $registro){
    ?>
    <tr>
        <input type="text" name="id" value="<?php echo $oPagina->id; ?>" style="display:none;">

        <td><?php echo $registro['nombre']; ?></td>
        <!-- <td><?php echo $registro['enlace']; ?></td> -->
        <td>
        <a href="http://localhost/NOTASESTUDIANTE/formularioEditarPagina.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarFormulario" onclick="eliminarPagina(<?php echo $registro['id']; ?>, <?php echo $registro['idModulo']; ?>)"><i class="fas fa-trash-alt"></i> Eliminar</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<a href="http://localhost/NOTASESTUDIANTE/listarmodulo.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
</div>
</body>
</html>

<div class="modal fade" id="eliminarFormulario" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Label">Eliminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que desea eliminar la pagina?</p>
      </div>
      <div class="modal-footer">
      <form action="../CRUD_paginas/eliminarPagina.php" method="GET">
        <input type="text" name="id" id="eliminar" style="display:none;">
        <input type="text" name="idModulo" id="eliminarPagina" style="display:none;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>
        </form>
      </div>
    </div>
  </div>
  
</div>
