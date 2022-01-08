<?php 
session_start();
include "dbh.inc.php";

    if(!isset($_SESSION['id'])) {
        header('Location: ../login.php');
        die();
    }
    if($_SESSION['id'] == 1) {
        header('Location: ../adminpanel.php');
        die();
    }


    $user = $_SESSION['id'];
    $gallery = $_GET['id'];
    $fname = $_SESSION['fname'];

    $sql = "SELECT * FROM cart WHERE gallery_id = '$gallery' AND user_id = '$user';";
    $r = mysqli_query($conn, $sql);
    if(mysqli_num_rows($r) > 0) {
        header('Location: ../index.php?cart=pailaiXa');
        die();
    }
    $sql = "SELECT * FROM gallery WHERE id = ".$gallery;
    $r = mysqli_query($conn, $sql);

    while($rr = mysqli_fetch_assoc($r)) {
        $price = $rr['price'];
    }
    $stat = "0";
    $sql = "INSERT INTO cart (gallery_id, user_id, status, username ,price) VALUES ('$gallery','$user','$stat','$fname','$price');";
    $r = mysqli_query($conn, $sql);

    header('Location: ../cart.php');

?>