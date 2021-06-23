<?php
require 'head.php';
?>



<html>

<body  style="background-color:lemonchiffon;">
    <div class="container">
       
        <center>
            <form action="crearestudiante.php" method="GET" id="color">
               
                <div class="col-sm-3">

                    <h4>tipo de documento</h4>
                    <select class="form-select" name="tipoDocumento" id="">
                        <option value="" disabled selected>Selecciones una opción</option>
                        <option value="RC">Registro Civil</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="CC">Cedula Ciudadanía</option>
                        <option value="CE">Cedula Extranjería</option>
                    </select>

                </div>
                <div class="col-sm-3">
                    <h4>documento de identidad</h4>

                    <input type="number" name="documento">

                </div>
                <div class="col-sm-3">
                    <h4>nombre</h4>

                    <input type="text" name="nombre">
                </div>

                <div class="col-sm-3">

                    <h4>apellidos</h4>
                    <input type="text" name="apellido">

                </div>
                <div class="col-sm-3">

                    <h4>direccion</h4>
                    <input type="text" name="direccion">

                </div>
                <div class="col-sm-3">

                    <h4>telefono</h4>
                    <input type="number" name="telefono"  >
                </div>
                <div class="col-sm-3"><br>
                  <i class="far fa-save"></i>  <input type="submit" class="btn btn-info" value="guardar" onclick="datos()">


                </div><br>
               


    </div>
    </center>
    </form>
</body>

</html>