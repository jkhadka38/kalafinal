<?php
session_start();

if(!isset($_SESSION['email'])){
    header('Location: ../signin.php');
}

    $email = $_SESSION['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $sql = "INSERT INTO cart (address, city, zip, state, email) VALUE ('$address', '$city', '$zip','$state','$email');";
   $r = mysqli_query($conn, $sql);