<?php
session_start();
include 'dbh.inc.php';
$pno = $_POST['pno'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$cpwd = $_POST['cpassword'];

if(empty($pno) || empty($email) || empty($pwd)) {
    die("yeee khali na xorna sathi");
}

if($pwd != $cpwd) {
    die("bhag ramro sanga heer pwd");
}
if(strlen($pwd) < 8) {
    die("hyaaa dherai hala na sathi");
}
    $sql = "UPDATE users SET  email ='$email', phoneNo = '$pno', password = '$pwd' WHERE id =".$_SESSION['id'];
    $r = mysqli_query($conn, $sql) or die("chalen");

    header('Location: ../index.php?e=sucess');
?> 