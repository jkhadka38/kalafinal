
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/newart.css" type="text/css">


  <title>Document</title>
</head>
<body>

<?php include 'header.php'; include 'includes/dbh.inc.php'; ?>

  <main>
    
  <div class="product-container">
  
  <?php
  $t = 'newthisweek';
    $sql = "SELECT * FROM gallery WHERE type = '$t';";
    $r = mysqli_query($conn, $sql);

    if(mysqli_num_rows($r) < 1) {
      echo "<p>Kei pani xaina</p>";
    } else {
      while($rr = mysqli_fetch_assoc($r)) {
        echo '
      <div class="photo-container">
          <div>
          <img src="uploads/'.$rr['image'].'.jpg">
          <div class="desClass">'.$rr['description'].'</div>
          </div> 
          <h2 class="title">'.$rr['tittle'].'</h2>
          <h2 class="price">NRP.'.$rr['price'].'</h2>
          <a href="includes/addCart.inc.php?id='.$rr['id'].'">
            <button class="cart">ADD TO CART</button>
          </a> 
      </div>
      ';
      }
    }
  ?>
        
        

      <!-- <div class="new-container2">
        <div class="photo1"> 
        </div>
        <h2 class="price"> Rs 1200</h2>
        <a href="addtocart.php">
          <button class="cart">ADD TO CART</button>
        </a>   
      </div>

      <div class="new-container3">
        <div class="photo2">
        </div>
        <h2 class="price"> Rs 1200</h2>
        <a href="addtocart.php">
          <button class="cart">ADD TO CART</button>
        </a>
      </div> -->
    </div>
 
  </main>
  <footer>
      
  <?php include 'footer.php' ?>


  </body>
  </html>