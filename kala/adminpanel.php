<?php include 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/adminpanel.css" type="text/css">

  <title>Document</title>
</head>
<body align='center'>
 
<?php include 'header.php' ?>
<h1 align="center">AdminPanel</h1>
<div class="table-container">
<?php
    $sql = "SELECT * FROM users;";
    $r = mysqli_query($conn, $sql);

    if(mysqli_num_rows($r) < 1) {
        
    } else {
        
        echo "<h2 class='tableHeader'>User Table</h2><table border=1>";
        
        echo"<tr>";
        echo "<th>SN</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Action</th>";
        echo"</tr>";
        while($res = mysqli_fetch_assoc($r)) {
            if($res['id'] == 1) {
                continue;
            }
            echo"<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['full_name']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td><a href='includes/deleteUser.inc.php?id=".$res['id']."'><button>Deleto</button></a></td>";
            echo"</tr>";
        
        }
        echo"</table>";
    }

    $sql = "SELECT * FROM gallery;";
    $r = mysqli_query($conn, $sql);

    if(mysqli_num_rows($r) < 1) {
        
    } else {
        
        echo "<h2 class='tableHeader'>Gallery Table</h2><table border=1>";
        
        echo"<tr>";
        echo "<th>SN</th>";
        echo "<th>Title</th>";
        echo "<th>Price</th>";
        echo "<th>Type</th>";
        echo "<th>Action</th>";
        echo"</tr>";
        while($res = mysqli_fetch_assoc($r)) {
            echo"<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['tittle']."</td>";
            echo "<td>".$res['price']."</td>";
            echo "<td>".$res['type']."</td>";
            echo "<td><a href='includes/deleteGallery.inc.php?id=".$res['id']."' style='margin-right:.5em;'><button>Deleto</button></a><a href='updateGallery.php?id=".$res['id']."'><button>Updato</button></a></td>";
            echo"</tr>";
        
        }
        echo"</table>";
    }

    $sql = "SELECT * FROM cart;";
    $r = mysqli_query($conn, $sql);

    if(mysqli_num_rows($r) < 1) {
        
    } else {
        
        echo "<h2 class='tableHeader'>Cart</h2><table border=1>";
        
        echo"<tr>";
        echo "<th>SN</th>";
        echo "<th>username</th>";
        echo "<th>Price</th>";
        echo "<th>gallery_id</th>";
        echo "<th>Status</th>";
        echo "<th>Action</th>";
        echo"</tr>";
        while($res = mysqli_fetch_assoc($r)) {
            echo"<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['username']."</td>";
            echo "<td>".$res['price']."</td>";
            echo "<td>".$res['gallery_id']."</td>";
            echo "<td>".$res['status']."</td>";
            echo "<td><a href='includes/done.inc.php?id=".$res['id']."' style='margin-right:.5em;'><button>Deleto</button></a></td>";
            echo"</tr>";
        
        }
        echo"</table>";
    }
?>
</div>
</body>
</html>