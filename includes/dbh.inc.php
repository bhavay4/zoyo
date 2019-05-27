<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "zoyo";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
	die("Connect Failed: ".mysqli_connect_error());
}