<?php

    include 'dbh.inc.php';
    $tit = $_POST['title'];
    $price = $_POST['price'];

    $sql = "UPDATE gallery SET tittle = '$tit', price = '$price' WHERE id =".$_GET['id'];
    $r = mysqli_query($conn, $sql);
?>