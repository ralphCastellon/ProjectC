<?php
include "connection.php";
$conn = connect();

if (isset($_POST['saved'])) {
    createUser($_POST['userName'], $_POST['lastName'], $_POST['lastName2'], $_POST['nick'], $_POST['pass'], $_POST['email'], $_POST['age'], $_POST['phone']);
} else {
    //header('location: ../views/Dashboard/Ppv.php');
    die();
}

function createUser($name, $lastName, $lastName2, $nick, $psw, $email, $age, $phone){
    global $conn;
    try {
        $query = "call addUser('$name','$lastName','$lastName2','$nick','$psw','$email','$age','$phone')";
        $stm = $conn->query($query);
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('user added successfully');</script>";
            header('location: ../views/Dashboard/Ppv.php');
            die();
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}

function usersAmount(){
    global $conn;
    try {
        $query = "select * from users";
        $result = $conn->query($query);
        if ($result->num_rows > 0){
            $_SESSION['user_amount'] = $result->num_rows;
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}