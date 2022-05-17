<?php
$myObj = new stdClass();
$myObj->name = "Titus Erwin Milianto";
$myObj->age = 22;
$myObj->Height = "172";
$myObj->city = "Surabaya";
$myObj->Country = "Indonesia";

$myJSON = json_encode($myObj);

echo $myJSON;
?>