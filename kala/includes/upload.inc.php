<?php
    include 'dbh.inc.php';
    session_start();
    if(!isset($_SESSION['fname'])) {
        header('Location: ../sigin.php');
        die();
    } if ($_SESSION['id'] != 1) {
        die('ACCESS DENIED');
    }

    $title = $_POST['title'];
    $price = $_POST['price'];
    $img = $_FILES['image']['tmp_name'];
    $des = $_POST['description'];
    $typ = $_POST['type'];
    $imgName = $title.''.$price;

    if(empty($title) || empty($price) || empty($img) || empty($des)){
        header('Location: ../upoad.php');
        die();
    }
    move_uploaded_file($img, "../uploads/".$imgName.".jpg");
    $sql = "INSERT INTO gallery (image, price, tittle, type, description) VALUE ('$imgName', '$price', '$title', '$typ', '$des');";
    $r = mysqli_query($conn, $sql);

    header('Location: ../index.php?bhayo=bhayo');

?>