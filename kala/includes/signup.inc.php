<?php
session_start();

    require_once 'dbh.inc.php';
    // require_once 'functions.inc.php'; 

if(isset($_POST["signup_submit"])) {

    $FULLNAME = $_POST["fname"];
    $EMAIL = $_POST["email"];
    $pno = $_POST["pno"];
    $PASSWORD= $_POST["pword"];

    if(empty($pno)) {
        header('Location: ../signup.php');
        die();
    } 
    if(!is_numeric($pno)) {
        die("Enter phone number");
    }
    if(strlen($pno) != 10) {
        die("Enter 10 digit phone number");
    } if(strlen($PASSWORD) < 8) {
        die("Enter at least 8 characters password");
    }

    $sql = "INSERT INTO users (full_name, email, phoneNo, password) VALUE ('$FULLNAME', '$EMAIL', '$pno', '$PASSWORD');";
   $r = mysqli_query($conn, $sql);
   
   header('location: ../signin.php');
}
else{
    header("location: ../signup.php");
    exit(); 
}





