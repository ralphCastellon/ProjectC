<?php
include "connection.php";
global $conn;
if (isset($_POST['id'])){
    deleteFloor($_POST['id']);
}elseif (isset($_POST['addFloor'])) {
    /*$nombre_img = $_FILES['avatar']['name'];
    $directorio = '/Ralph_Laguna_RA3_ES/views/images/profile/users/';
    move_uploaded_file($_FILES['avatar']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$directorio.$nombre_img);
    $avatar = $directorio.$nombre_img;*/
    createFloor($_POST['title'], $_POST['n_room'], $_POST['price'], $_POST['n_baths'], $_POST['m2'], $_POST['floorStatus'], $_POST['heatkind'], $_POST['furniture'],$_POST['dcmkm'],$_POST['contact'],$_POST['f_status'], $_POST['kindOfFloor'], $_POST['opinion']);
}elseif (isset($_POST[''])){
    updateFloor($_POST['title'], $_POST['n_room'], $_POST['price'], $_POST['n_baths'], $_POST['m2'], $_POST['floorStatus'], $_POST['heatkind'], $_POST['furniture'],$_POST['dcmkm'],$_POST['contact'],$_POST['f_status'], $_POST['kindOfFloor'], $_POST['opinion'],$_POST['oldtitle']);
}
function createFloor($title,$n_room,$price,$n_baths,$m2,$floorStatus,$heatkind,$furniture,$dcmkm,$contact,$f_status,$kindOfFloor,$opinion){
    global $conn;
    try {
        $admin = $_SESSION['admin'];
        $query = "CALL addFloor(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("sididssidissss",$title,$n_room,$price,$n_baths,$m2,$floorStatus,$heatkind,$furniture,$dcmkm,$contact,$f_status,$kindOfFloor,$admin,$opinion);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('user added successfully');</script>";
            header('location: ../views/CreateFloorAdmin.php');
            die();
        } else {
            echo "<script>console.log('$conn->error');</script>";
            header('location: ../views/CreateFloorAdmin.php?error_code=1');
            die();
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function deleteFloor($id){
    global $conn;
    try {
        $query = "call delFloor('$id')";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<script>console.log('Floor delete successfully');</script>";
            header("location: ../views/floorAdmin.php");
            die();
        } else {
            echo "<script>console.log('Floor delete fail');</script>";
            header("location: ../views/floorAdmin.php?error_code=1");
            die();
        }
    }catch (mysqli_sql_exception $e){
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
function updateFloor($title,$n_room,$price,$n_baths,$m2,$floorStatus,$heatkind,$furniture,$dcmkm,$contact,$f_status,$kindOfFloor,$opinion,$oldTitle){
    global $conn;
    try {
        $admin = $_SESSION['admin'];
        $query = "CALL updateFloor(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = $conn->prepare($query);
        $stm->bind_param("sididssidisssss",$title,$n_room,$price,$n_baths,$m2,$floorStatus,$heatkind,$furniture,$dcmkm,$contact,$f_status,$kindOfFloor,$admin,$opinion,$oldTitle);
        $stm->execute();
        $result = $stm->close();
        if ($result > 0) {
            echo "<script>console.log('floor updated successfully');</script>";
            header('location: ../views/UpdateFloorAdmin.php');
            die();
        } else {
            echo "<script>console.log('$conn->error');</script>";
            header('location: ../views/UpdateFloorAdmin.php?error_code=1');
            die();
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
}
