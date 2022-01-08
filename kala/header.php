<?php
session_start();
    echo '
    <header>
    <div class="logo">
      <h1>Kalā</h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">HOME</a> </li>
        ';
          if(isset($_SESSION['fname'])) {
            if($_SESSION['id'] == 1) {
              echo '<li><a href="adminpanel.php">ADMINPANEL</a> </li>';

            } else {
  
             echo'
        <li><a href="cart.php">CART</a> </li>
             <li><a href="profile.php">PROFILE</a> </li><li>'; 
            }
             if($_SESSION['id']== 1){
              echo '
        <li><a href="upload.php">UPLOAD</a> </li>
                
              ';
            }
             echo'<li><a href="includes/logout.inc.php">LOGOUT</a> </li>';
           
            } else {
            echo '
        <li><a href="signin.php">SIGN IN</a> </li>
        ';
          }
        echo '
      </ul>
    </nav>
  </header>
    ';
?>