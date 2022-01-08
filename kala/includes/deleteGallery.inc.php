<?php
session_start();
include 'dbh.inc.php';
    if(!isset($_SESSION['id'])) {
        header('Location: ../login.php?e=notloggedin');
        die();
    }
    if($_SESSION['id'] != 1) {
        die("Not admin");
    }
    $sql = "DELETE FROM gallery WHERE id = ".$_GET['id'];
    $r = mysqli_query($conn, $sql);
    header('Location: ../adminpanel.php');

?>