<?php 
echo"======";

$xml=file_get_contents("php://input");
$array_data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);

$fp=fopen('abc.txt',"a");
fputs($fp,'==='. serialize($array_data) );
fclose($fp);




?>