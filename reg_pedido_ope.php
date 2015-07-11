<?php
require_once("conexion.php");
$cnn=conectar();
$mid=$_POST['mid'];
$emp=$_POST['emp'];
$suma=0;
$sql="INSERT INTO `pedido`(`mesa_id`, `empleado_id`, `pedido_montot`, `pedido_estado`, `ubicacion_id`, `pedido_recargo`) VALUES (".$mid.",".$emp.",0,1,1,0)";
if(mysql_query($sql,$cnn))
{
    $sql2="select max(pedido_id) from pedido";
    $rs=mysql_query($sql2,$cnn);
    while($reg =mysql_fetch_array($rs))
    {
        $pid=$reg[0];
    }
    $sql3="SELECT `id`, `comanda_id`, `cantidad`, `precio`, `total`, `nombre` FROM `temp_detallepedido`";
    $rs=mysql_query($sql3,$cnn);
    while($reg =mysql_fetch_array($rs))
    {
        $sql4="INSERT INTO `detallepedido`(`comanda_id`, `pedido_id`, `Cantidad`, `PrecioUni`, `PrecioTotal`, `pedido_detalle_est`) VALUES (".$reg[1].",".$pid.",".$reg[2].",".$reg[3].",".$reg[4].",1)";
        mysql_query($sql3,$cnn);
        $suma=$suma+$reg[4];
    }
    $sql4="UPDATE `pedido` SET `pedido_montot`=".$suma." WHERE `pedido_id`=".$pid."";
    if(mysql_query($sql4,$cnn))
    {
        $sql5="delete from temp_pedido";
        mysql_query($sql5,$cnn);
        echo "correcto";
    }else{
        echo "error";
    }
}else{
    echo "error";
}

