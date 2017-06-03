<?php

require_once '../DBdefine.php';
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=UTF-8");

$conn = new mysqli($HOST, $USER, $PASS, $dbName);

$result = $conn->query("SELECT * FROM UIsettings");

$outp = "";


 ?>
