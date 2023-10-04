<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "hotel";
$port = "";

mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect($hostname, $username, $password, $database);
if(!$connection){
    die("ทอดสะพานไม่ได้" .mysqli_connect_error());
}
