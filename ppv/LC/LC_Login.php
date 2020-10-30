<?php
include "connection.php";
$conn = connect();
session_start();
if (session_status() === PHP_SESSION_ACTIVE) {
    if (isset($_POST['login'])) {
        $pass = strval($_POST['pass']);
        $_SESSION['user'] = $_POST['name'];
        $_SESSION['psw'] = $pass;
        logIn($_POST['name'], $pass);
    } elseif (isset($_GET['logout'])) {
        logOut($_SESSION['user'], $_SESSION['psw']);
    } elseif (isset($_POST['signup'])){
        $pass = strval($_POST['pass']);
        singUp($_POST['name'],$_POST['lastName1'],$_POST['lastName2'],$_POST['nick'],$pass,$_POST['email'],$_POST['age'],$_POST['phone']);
    }
} else {
    header('location: ../views/Login/login.php');
    die();
}
function logIn($user, $psw){
    global $conn;
    try {
        $query = "CALL login('$user','$psw')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<script>console.log('logIn successfully');</script>";
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
            header("location: ../views/Dashboard/Ppv.php");
            die();
        } else {
            header("location: ../views/Login/login.php");
            die();
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}

function logOut($user, $psw){
    global $conn;
    try {
        $query = "CALL logout('$user','$psw')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<script>console.log('logOut successfully');</script>";
            header('location: ../views/Login/login.php');
            die();
        } else {
            echo "<script>console.log('$conn->error');</script>";
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
// this is the sign Up for standard users
// have a mistake I don't know what it is I need to solved
function singUp($name,$lastName1,$lastName2,$nick,$psw,$email,$age,$phone){
    global $conn;
    try {
        $query = "CALL addUser('$name','$lastName1','$lastName2','$nick','$psw','$email','$age','$phone')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<script>console.log('signUp successfully');</script>";
            header('location: ../views/Login/login.php');
            die();
        } else {
            echo "<script>console.log('$conn->error');</script>";
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}