<?php
include "config.php";
global $serverName, $database, $user, $psw, $key;

$conn = mysqli_connect($serverName, $user, $psw, $database);

if (!$conn){
    die("Something went wrong ".mysqli_connect_error());
}