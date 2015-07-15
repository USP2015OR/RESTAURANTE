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
    echo "correcto";           
}else{
    echo "Error";
}