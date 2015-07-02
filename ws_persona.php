<?php
$ruc=$_POST['dni'];
$pos=$_POST['pos'];
//error_reporting(0);
    header('Content-Type: text/html; charset=ISO-8859-1'); 
    require_once('lib/nusoap.php');

    
$servicio="http://www.webservicesryr.somee.com/service1.asmx?wsdl"; //url del servicio
$parametros=array(); //parametros de la llamada
$parametros['dni']=$ruc;
$client = new SoapClient($servicio, $parametros);
$result = $client->Persona($parametros);

if(isset($result->PersonaResult->string[$pos]))
    {
    echo $result->PersonaResult->string[$pos];
    }
else
    {
    echo "error";
    }
/*echo $result->PersonaResult->string[1];
echo $result->PersonaResult->string[2];
echo $result->PersonaResult->string[3];*/
//echo "<script type=\"text/javascript\">alert(\"Fotos guardadas\");</script>";