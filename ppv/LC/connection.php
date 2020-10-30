<?php
include "config.php";
global $serverName, $database, $user, $psw, $key;

function connect(){
    global $serverName, $database, $user, $psw;
    try {
        $conn = new mysqli($serverName, $user, $psw, $database);
        echo "<script>console.log('connection successfully');</script>";
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
        die('connection fail');
    }
    return $conn;
}