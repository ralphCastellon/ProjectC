<?php
include "connection.php";
global $conn;

if (isset($_POST['addUser'])) {
   $nombre_img = $_FILES['avatar']['name'];
    $directorio = '/Ralph_Laguna_RA3_ES/views/images/profile/admin/';
    move_uploaded_file($_FILES['avatar']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$directorio.$nombre_img);
    $avatar = $directorio.$nombre_img;
    createAdmin($_POST['name'], $_POST['lastName'], $_POST['lastName2'], $_POST['nick'], $_POST['pass'], $_POST['email'], $_POST['age'], $_POST['phone'],$avatar);
}elseif (isset($_POST['updateProfile'])) {
    $nombre_img = $_FILES['avatar']['name'];
    $directorio = '/Ralph_Laguna_RA3_ES/views/images/profile/admin/';
    move_uploaded_file($_FILES['avatar']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$directorio.$nombre_img);
    $avatar = $directorio.$nombre_img;
    updateAdmin($_POST['name'], $_POST['lastName'], $_POST['lastName2'],$_POST['oldNick'] ,$_POST['email'], $_POST['age'], $_POST['phone'],$avatar,$_POST['nick']);
}elseif (isset($_POST['updateUserPass'])) {
    updateAdminPass($_POST['nick'],$_POST['oldPass'],$_POST['newPass']);
}elseif (isset($_POST['CancelAddUser'])) {
    header('location: ../views/index.php');
    die();
}
function createAdmin($name,$lastName1,$lastName2,$nick,$psw,$email,$age,$phone,$avatar){
    global $conn;
    try {
        $query = "CALL addAdmin(?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("ssssssiis",$name,$lastName1,$lastName2,$nick,$psw,$email,$age,$phone,$avatar);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('admin added successfully');</script>";
            header('location: ../views/adminAdmin.php');
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
function updateAdmin($name, $lastName, $lastName2, $nick,$email, $age, $phone, $avatar,$newNick){
    global $conn;
    try {
        $query = "call updateAdmin(?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("sssssiiss",$name,$lastName,$lastName2,$nick,$email,$age,$phone,$avatar,$newNick);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('admin updated successfully');</script>";
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
function updateAdminPass($nick,$oldPass,$newPass){
    global $conn;
    try {
        $query = "call updateAdminPass(?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("sss",$nick,$oldPass,$newPass);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('admin password updated successfully');</script>";
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
