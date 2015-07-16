        <table class="table-striped" align="center">
   
         <?php 
             require_once("conexion.php");
	      $cnn=conectar();
              
           
              $pedidoid=$_POST["elegido"];
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
                $combog = mysql_query("SELECT `pedido_id` FROM `pedido` where `mesa_id`='$pedidoid' and `pedido_estado`=1",$cnn);
                $row = mysql_fetch_array($combog);
              
              
                $clavebuscadah=mysql_query("SELECT `Cantidad`,`Cantidad`,`PrecioUni`,`PrecioTotal` FROM `detallepedido` WHERE `pedido_id`= $row[0]",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah)){
                 
              echo $row[3]; 
              echo '<br>';
 
       };

       
     ?>
          