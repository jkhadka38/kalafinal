

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/signin.css" type="text/css">

  <title>Document</title>
</head>
<body>

<?php include 'header.php' ?>

  <main>
    <div class="signin-container">
      <h1>SIGN IN </h1>
      <form action="includes/login.inc.php" method="post">
        <h2>Email</h2>
        <input type="email" name="email" id="" placeholder="johndoe@email.com">

        <h2>Password</h2>
        <input type="password" name="pword" id="" placeholder="........"><br>

        <button type="submit" name="login_submit">Log In</button>
        <p>Don't have any account? <a href="signup.php" class="btn"> Sign Up</a></p>
         
      
      </form>
    </div>

    <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all the fields </p>";
    }
    elseif ($_GET["error"] == "invalid") {
     echo "<p> Choose a proper username</p>";
    }
    elseif ($_GET["error"] == "invalidemail") {
      echo "<p> Choose a proper email</p>";
    }
    elseif ($_GET["error"] == "stmtfailed") {
      echo "<p> Something went wrong, try again!</p>";
    }
    elseif ($_GET["error"] == "usernametaken") {
      echo "<p> This username is already taken. Try something else.</p>";
    }
    elseif ($_GET["error"] == "none") {
      echo "<p> You have signed up.</p>";
    }
  }
  ?>
  </main>
  <?php include 'footer.php' ?>

  </body>