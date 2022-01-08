
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/profile.css" type="text/css">

  
  <title>Document</title>
</head>
<body>
  
<?php include 'header.php'; include 'includes/dbh.inc.php'; ?>

  <main>
      <div class="profile-container">
          <h1>PROFILE</h1>
          <?php
            $sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
            $r = mysqli_query($conn, $sql);
            echo '
            <form action="includes/updateProf.inc.php?id='.$_SESSION['id'].'" method="post"> ';
            while($rr = mysqli_fetch_assoc($r)) {
                echo '

            <h2>Email</h2>
                <input type="email" id="email" name="email" placeholder="Email Address" value="'.$rr['email'].'"> <br> 
            
                <h2>Phone No.</h2>
                <input type="text" id="email" name="pno" placeholder="Email Address" value="'.$rr['phoneNo'].'"> <br> 
            
            <h2>Password</h2>
                <input type="password" id="password" name="password" value="'.$rr['password'].'"> 
            

            <h2>Confirm Password</h2>
                <input type="password" id="cpassword" name="cpassword" value="'.$rr['password'].'"> 
            
                <button type="submit" name="submit">Update</button>

                
                ';
            }
          ?>
            
          </form>
      </div>  
</main>

<?php include 'footer.php' ?>

</html>