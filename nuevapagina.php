<?php
require 'head.php';

?>

<?php
  require_once 'pagina.php';

  $oPagina=new pagina();
  $oPagina->idModulo=$_GET['idModulo'];
  $consulta=$oPagina->ListarPagina();
?> 




<html>


<body  style="background-color:lemonchiffon;">
    <div class="container">
       
        <center>
            <form action="crearpagina.php" method="GET" id="color">
               
            <input type="text" name="idModulo" value="<?php echo $oPagina->idModulo; ?>" style="display:none;">
                <div class="col-sm-3">
                    <h4>nombre pagina</h4>

                    <input type="text" name="nombre">

                </div>
               

            
                <div class="col-sm-3"><br>
                  <i class="far fa-save"></i>  <input type="submit" class="btn btn-info" value="guardar" onclick="datos()">


                </div><br>
               


    </div>
    </center>
    </form>
</body>

</html>