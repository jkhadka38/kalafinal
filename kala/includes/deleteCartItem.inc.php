<?php

    include 'dbh.inc.php';

    $sql = "DELETE FROM cart WHERE id =".$_GET['id'];
    $r = mysqli_query($conn , $sql);

    header('Location: ../cart.php?bhayo');

?>