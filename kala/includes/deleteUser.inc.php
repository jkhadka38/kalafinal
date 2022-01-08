<?php
session_start();
include 'dbh.inc.php';
    if(!isset($_SESSION['id'])) {
        header('Location: ../login.php?e=notloggedin');
        die();
    }
    if($_SESSION['id'] != 1) {
        die("Admin haina bhag");
    }
    $sql = "DELETE FROM users WHERE id = ".$_GET['id'];
    $r = mysqli_query($conn, $sql);
    header('Location: ../adminpanel.php');


?>