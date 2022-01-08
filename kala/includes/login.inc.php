<?php
session_start();
    $email = $_POST["email"];
    $pword = $_POST["pword"];

    require_once 'dbh.inc.php';
    // require_once 'functions.inc.php';

    $sql = "SELECT * FROM users where email = '$email' AND password = '$pword' ;";
    $r = mysqli_query($conn, $sql);

    if(mysqli_num_rows($r) < 1) {
        die('no user like this');
    } else {
        while($aa = mysqli_fetch_assoc($r)){
            $_SESSION['fname'] = $aa['full_name'];
            $_SESSION['email'] = $aa['email'];
            $_SESSION['id'] = $aa['id'];
        }
    }

    header('Location: ../index.php');
