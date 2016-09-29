<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "pruebas";

$con = mysqli_connect($host,$user,$pass,$db);
$acentos = $con->query("SET NAMES 'utf8'");
?>