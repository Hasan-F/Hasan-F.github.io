<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "12345";
$dBName = "user_db";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}