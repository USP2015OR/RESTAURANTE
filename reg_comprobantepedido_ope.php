<?php
require_once("conexion.php");
$cnn=conectar();
$comprobantenumero=$_POST['comprobantenumero'];
$comprobantefecha =$_POST['comprobantefecha'];
$cbcaja=$_POST['cbcaja'];
$comprobantemonto=$_POST['comprobantemonto'];
$cbtipodocumento=$_POST['cbtipodocumento'];
$comprobanteclienteID=$_POST['comprobanteclienteID'];
$comprobantepedido=$_POST['comprobantepedido'];
$comprobantedescuento=$_POST['comprobantedescuento'];
$comprobanteigv=$_POST['comprobanteigv'];
$comprobantedelivery =$_POST['comprobantedelivery'];
$comprobantetotal=$_POST['comprobantetotal'];
$comprobantenumerocaja=$_POST['comprobantenumerocaja'];
$descuento=$_POST['descuento'];

$query="INSERT INTO `comprobante`(`comprobante_nro`, `pedido_id`, `comprobante_monreal`, `comprobante_fechemi`, `comprobante_tipo`, `comprobante_estado`, `comprobante_igv`, `comprobante_descuento`, `comprobante_monfin`, `cliente_id`, `comprobante_recgdeliv`, `caja_id`, `comprobante_fechreg`, `comprobante_montdesc`) VALUES ($comprobantenumero,$comprobantepedido,$comprobantemonto,'$comprobantefecha',$cbtipodocumento,1,$comprobanteigv,$comprobantedescuento,$comprobantetotal,$comprobanteclienteID,$comprobantedelivery,$comprobantenumerocaja,curdate(),$descuento)";
if(mysql_query($query,$cnn)){
             $clavebuscadah1=mysql_query("SELECT max(comprobante_id) FROM `comprobante`",$cnn) or
                die("Problemas en el select:".mysql_error());
                $row1 = mysql_fetch_array($clavebuscadah1);
                //$re=$row1[0];
             $clavebuscadah=mysql_query("SELECT `Cantidad`,`Cantidad`,`PrecioUni`,`PrecioTotal`,`comanda_id` FROM `detallepedido` WHERE `pedido_id`= $comprobantepedido",$cnn) or
               // $count=count($clavebuscadah);
                   die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah)){
                  
             $insertdet="INSERT INTO `detallecomprobante`(`comprobante_id`, `Cantidad`, `PrecioUni`, `PrecioTotal`, `comprobante_detalle_est`, `comanda_id`) VALUES ($row1[0], $row[1], $row[2], $row[3],1,$row[4]);";
              mysql_query($insertdet,$cnn) or die("Problemas en el select:".mysql_error());
                  };
             $query1="UPDATE `mesa` SET `mesa_estado`=1 WHERE mesa_id=$cbcaja";
             mysql_query($query1,$cnn);
             $query2="UPDATE `pedido` SET `pedido_estado`=3 WHERE pedido_id=$comprobantepedido";
             mysql_query($query2,$cnn);
     
    echo "Correcto";  
}else{
    echo "Error";
}