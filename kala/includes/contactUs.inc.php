<?php 

include 'dbh.inc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    if(empty($name) || empty($email) || empty($msg)) {

        die("Please fill the required field ");

    }

    $sql = "INSERT INTO connect (name, email, message) VALUES ('$name' , '$email', '$msg');";
    $r = mysqli_query($conn, $sql);

    header('Location: ../index.php');
?>