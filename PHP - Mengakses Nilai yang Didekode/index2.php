<?php
$jsonobj = '{"Asep":20,"Dadang":19,"Soni":22}';

$arr = json_decode($jsonobj, true);

echo $arr["Asep"];
echo $arr["Dadang"];
echo $arr["Soni"];
?>