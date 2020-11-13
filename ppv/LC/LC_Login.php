<?php
session_start();
include "connection.php";
global $conn;
if (session_status() === PHP_SESSION_ACTIVE) {
    if (isset($_POST['loginAdmin'])) {
        logInAdmin($_POST['name'], $_POST['pass']);
    }elseif (isset($_POST['loginUser'])) {
        logInUsers($_POST['name'], $_POST['pass']);
    }elseif (isset($_GET['logoutUser'])) {
        logOutUsers($_SESSION['user'], $_SESSION['psw']);
    }elseif (isset($_GET['logoutAdmin'])) {
        logOutAdmin($_SESSION['admin'], $_SESSION['psw']);
    } elseif (isset($_POST['signup'])){
        $pass = strval($_POST['pass']);
        singUp($_POST['name'],$_POST['lastName1'],$_POST['lastName2'],$_POST['nick'],$pass,$_POST['email'],$_POST['age'],$_POST['phone']);
    }
} else {
    header('location: ../views/login.php');
    die();
}
function logInAdmin($user, $psw){
    global $conn;
    try {
        $query = "CALL loginAdmin('$user','$psw')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_array($result);
            echo "<script>console.log('logIn successfully');</script>";
            $_SESSION['admin'] = $user;
            $_SESSION['psw'] = $psw;
            $_SESSION['img'] = $row[10];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + 300;
            header("location: ../views/index.php");
            die();
        } else {
            header("location: ../views/Administracion.php");
            die();
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function logOutAdmin($user, $psw){
    global $conn;
    try {
        $query = "CALL logoutAdmin('$user','$psw')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<script>console.log('logOut successfully');</script>";
            session_destroy();
            header('location: ../views/Administracion.php');
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
function logInUsers($user, $psw){
    global $conn;
    try {
        $query = "CALL login('$user','$psw')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
           $row = mysqli_fetch_array($result);
            echo "<script>console.log('logIn users successfully');</script>";
            $_SESSION['user'] = $user;
            $_SESSION['psw'] = $psw;
            $_SESSION['img'] = $row[10];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + 300;
            header("location: ../views/index.php");
            die();
        } else {
            header("location: ../views/login.php");
            die();
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function logOutUsers($user, $psw){
    global $conn;
    try {
        $query = "CALL logout('$user','$psw')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<script>console.log('logOut successfully');</script>";
            session_destroy();
            header('location: ../views/login.php');
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
function singUp($name,$lastName1,$lastName2,$nick,$psw,$email,$age,$phone){
    global $conn;
    try {
        $url = "";
        $query = "CALL addUser(?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("ssssssiis",$name,$lastName1,$lastName2,$nick,$psw,$email,$age,$phone,$url);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('signUp successfully');</script>";
            header('location: ../views/login.php');
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