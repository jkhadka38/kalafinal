<?php

    session_start();
    include 'dbh.inc.php';
    $s = '1';
    $sql = "UPDATE cart SET status = '$s'  WHERE user_id = ".$_SESSION['id'];
    $r = mysqli_query($conn, $sql);

    header('Location: ../cart.php?bhayooo');
    
?>