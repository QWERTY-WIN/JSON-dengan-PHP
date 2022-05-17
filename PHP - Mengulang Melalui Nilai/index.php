<?php
$jsonobj = '{"Asep":20,"Dadang":19,"Soni":22}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>