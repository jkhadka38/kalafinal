<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/signin.css" type="text/css">
  <link rel="stylesheet" href="css/signup.css" type="text/css">
  <title>Document</title>
</head>
</head>
<body>

<?php include 'header.php' ?>

  <main>
    <div class="signup-container">
      <h1>SIGN UP </h1>
      <form action="includes/signup.inc.php" method="post">
  
      <h2>Full Name</h2>
        <input type="text" name="fname" id="" placeholder="John Doe"><br>

        <h2>E-mail</h2>
        <input type="email" name="email" id="" placeholder="example@remail.com"><br>
        <h2>Phone Number</h2>
        <input type="text" name="pno" id="" placeholder="9859222222"><br>

        <h2>Password</h2>
        <input type="password" name="pword" id="" placeholder="........"><br>

        <button type="submit" name="signup_submit"> Sign Up</button>
        <p>Already have an account? <a href="signin.php" class="btn"> Sign In</a></p>
      </form>  
    </div>  
    
  
  </main>
  
  <?php include 'footer.php' ?>

  </body>
  </html>



