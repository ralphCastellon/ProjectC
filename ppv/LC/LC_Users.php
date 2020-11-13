<?php
include "connection.php";
global $conn;

if (isset($_POST['addUser'])) {
    $nombre_img = $_FILES['avatar']['name'];
    $directorio = '/Ralph_Laguna_RA3_ES/views/images/profile/users/';
    move_uploaded_file($_FILES['avatar']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$directorio.$nombre_img);
    $avatar = $directorio.$nombre_img;
    createUser($_POST['name'], $_POST['lastName'], $_POST['lastName2'], $_POST['nick'], $_POST['pass'], $_POST['email'], $_POST['age'], $_POST['phone'],$avatar);
}elseif (isset($_GET['id'])){
    addFavorite($_GET['id']);
}elseif (isset($_POST['id'])){
    deleteUser($_POST['id']);
}elseif (isset($_POST['updateUser'])) {
    $nombre_img = $_FILES['avatar']['name'];
    $directorio = '/Ralph_Laguna_RA3_ES/views/images/profile/users/';
    move_uploaded_file($_FILES['avatar']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$directorio.$nombre_img);
    $avatar = $directorio.$nombre_img;
    updateUserByAdmin($_POST['name'], $_POST['lastName'], $_POST['lastName2'],$_POST['oldNick'] ,$_POST['email'], $_POST['age'], $_POST['phone'],$avatar,$_POST['nick']);
}elseif (isset($_POST['updateProfile'])) {
    $nombre_img = $_FILES['avatar']['name'];
    $directorio = '/Ralph_Laguna_RA3_ES/views/images/profile/users/';
    move_uploaded_file($_FILES['avatar']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$directorio.$nombre_img);
    $avatar = $directorio.$nombre_img;
    updateUser($_POST['name'], $_POST['lastName'], $_POST['lastName2'],$_POST['oldNick'] ,$_POST['email'], $_POST['age'], $_POST['phone'],$avatar,$_POST['nick']);
}elseif (isset($_POST['updateUserPass'])) {
    updateUserPsw($_POST['nick'],$_POST['oldPass'],$_POST['newPass']);
}elseif (isset($_POST['CancelAddUser'])) {
    header('location: ../views/index.php');
    die();
}
function createUser($name,$lastName1,$lastName2,$nick,$psw,$email,$age,$phone,$avatar){
    global $conn;
    try {
        $query = "CALL addUser(?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("ssssssiis",$name,$lastName1,$lastName2,$nick,$psw,$email,$age,$phone,$avatar);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('user added successfully');</script>";
            header('location: ../views/CreateUserAdmin.php');
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
function updateUser($name, $lastName, $lastName2, $nick,$email, $age, $phone, $avatar,$newNick){
    global $conn;
    try {
        $query = "call updateUser(?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("sssssiiss",$name,$lastName,$lastName2,$nick,$email,$age,$phone,$avatar,$newNick);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('user added successfully');</script>";
            header('location: ../views/EditeProfileAdmin.php');
            die();
        } else {
            echo "<script>console.log('$conn->error');</script>";
        }
    }catch (mysqli_sql_exception $e){
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function updateUserByAdmin($name, $lastName, $lastName2, $nick,$email, $age, $phone, $avatar,$newNick){
    global $conn;
    try {
        $query = "call updateUser(?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("sssssiiss",$name,$lastName,$lastName2,$nick,$email,$age,$phone,$avatar,$newNick);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('user added successfully');</script>";
            header('location: ../views/CreateUserAdmin.php');
            die();
        } else {
            echo "<script>console.log('$conn->error');</script>";
        }
    }catch (mysqli_sql_exception $e){
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function updateUserPsw($nick,$oldPass,$newPass){
    global $conn;
    try {
        $query = "call updateUserPass(?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("sss",$nick,$oldPass,$newPass);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('user password updated successfully');</script>";
            header('location: ../views/EditeProfileAdmin.php');
            die();
        } else {
            echo "<script>console.log('$conn->error');</script>";
        }
    }catch (mysqli_sql_exception $e){
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function addFavorite($idF){
    global $conn;
    try {
        $id = 1;
        $query = "call addFavorite(?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("ii",$id,$idF);
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('favorite added successfully');</script>";
            header("location: ../views/PPV/floorView.php?id=$idF");
            die();
        }
    }catch (mysqli_sql_exception $e){
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function deleteUser($id){
    global $conn;
    try {
        $query = "call delUserByAdmin('$id')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<script>console.log('User deleted successfully');</script>";
            header("location: ../views/userAdmin.php");
            die();
        } else {
            echo "<script>console.log('User deleted fail');</script>";
            header("location: ../views/userAdmin.php?error_code=1");
            die();
        }
    }catch (mysqli_sql_exception $e){
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}