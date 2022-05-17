<?php
$jsonobj = '{"Asep":20,"Dadang":19,"Soni":22}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>