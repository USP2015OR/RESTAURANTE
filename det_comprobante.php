        <table class="table-striped" align="center">
   
         <?php 
             require_once("conexion.php");
	      $cnn=conectar();
              
            $salida1 ="";
            $salida2 ="";
            $salida3 ="";
            $salida4 ="";
            $salida5 ="";
            $salida6 ="";
            $salida7 ="";
            $salida8 ="";
            $salida9 ="";
            $salida10 ="";
            $salida11 ="";
            $salida12 ="";
            $salida13 ="";
            $salida14 ="";
            $salida15 ="";
            $salida16 ="";
              $pedidoid=$_POST["elegido"];
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
                $combog = mysql_query("SELECT `pedido_id` FROM `pedido` where `mesa_id`='$pedidoid' and `pedido_estado`=1",$cnn);
                $row = mysql_fetch_array($combog);
              
              
                $clavebuscadah=mysql_query("SELECT c.comanda_nombre,dt.`Cantidad`,dt.`PrecioUni`,dt.`PrecioTotal` FROM `detallepedido` dt inner join comanda c on c.comanda_id=dt.comanda_id WHERE dt.`pedido_id`= $row[0]
",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah)){
                 
              echo $row[0]; 
              echo '<br>';
             
        
       };

       ;
     ?>
          