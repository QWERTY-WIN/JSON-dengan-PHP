<?php
$jsonobj = '{"Asep":20,"Dadang":19,"Soni":22}';

$obj = json_decode($jsonobj);

echo $obj->Asep;
echo $obj->Dadang;
echo $obj->Soni;
?>