<?php 
require 'head.php';
require_once 'usuario.php';


$idRol=$_GET['idRol'];

$ousuario=new usuario();
$listarDeUsuarioDiferente=$ousuario->mostrarUsuariosPorIdDiferente($idRol);

?>

<html>
<head>
<title>Nuevo Rol</title>
</head>

<body>
<div class="container">

<H1>NUEVO USUARIO</H1>
<form action="controller/usuarioController.php" method="GET">
            <h3>Usuarios: </h3>
            <input name="idRol" value="<?php echo $idRol; ?>" style="display:none">
            <select class="form-select" name="idUser" id="" required>
            <option value="" disabled selected>Selecciones una opción</option>
            <?php foreach($listarDeUsuarioDiferente as $registro){
            ?>
            <option value="<?php echo $registro['idUser']; ?>"><?php echo $registro['nombre']; ?></option>
            <?php
            }
            ?>
            </select>
            <br>
            <button type="submit" class="btn btn-success" name="funcion"  value="registrarUsuarioEnRol">Guardar</button>
            <a href="http://localhost/phpCRUD/CRUD_roles/listarDetalleRol.php?id=<?php echo $idRol; ?>" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
        </form>
</div>
</body>
</html>

