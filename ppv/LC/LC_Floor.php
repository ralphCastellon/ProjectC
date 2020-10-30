<?php
include "connection.php";
$conn = connect();
function createFloor(){
    global $conn;
    try {
        $query = "call addFloor()";
        $conn->query($query);
    }catch (mysqli_sql_exception $e){

    } finally {
        $conn->close();
    }
}
function getFloor(){
    global $conn;
    try {
        $query = "call addFloor()";
        $conn->query($query);
    }catch (mysqli_sql_exception $e){

    } finally {
        $conn->close();
    }
}
function deleteFloor(){
    global $conn;
    try {
        $query = "call addFloor()";
        $conn->query($query);
    }catch (mysqli_sql_exception $e){

    } finally {
        $conn->close();
    }
}
function updateFloor(){
    global $conn;
    try {
        $query = "call addFloor()";
        $conn->query($query);
    }catch (mysqli_sql_exception $e){

    } finally {
        $conn->close();
    }
}