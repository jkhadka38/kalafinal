
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/utils.css" type="text/css">
    <link rel="stylesheet" href="css/profile.css" type="text/css">
    <link rel="stylesheet" href="css/addtocart.css" type="text/css">
    <STYLE>
      table {
        width:100%;
      } .table-container {
        padding: 0 2em;
      } 
    </STYLE>
    
    <title>Document</title>
  <body align = "center">
    
    <?php include 'header.php' ?>

    <div class="table-container">
        <?php
          include 'includes/dbh.inc.php';
          $sql = "SELECT * FROM cart WHERE status = 0;";
      $r = mysqli_query($conn, $sql);
      $t = 0;

      if(mysqli_num_rows($r) < 1) {
          echo "<h1>Kei xaina sathi yeta</h1>";
      } else {
          
          echo "<h2 class='tableHeader'>User Table</h2><table border=1>";
          
          echo"<tr>";
          echo "<th>SN</th>";
          echo "<th>price</th>";
          echo "<th>Action</th>";
          echo"</tr>";
          while($res = mysqli_fetch_assoc($r)) {
              echo"<tr>";
              echo "<td>".$res['id']."</td>";
              echo "<td>".$res['price']."</td>";
              echo "<td><a href='includes/deleteCartItem.inc.php?id=".$res['id']."'><button>Deleto</button></a></td>";
              echo"</tr>";
              $t = (float)$t + (float)$res['price'];
          }
          echo"</table>";
          echo "<div>Total: ".$t." 
            <button style='background-color:red;border:none;padding:1em;'><a href='includes/buy.inc.php' style='text-decoration:none;color:white;'>Check Out</a></button>
          </div>";
      }
        ?>
    </div>
  <?php include 'footer.php' ?>

  </body>