
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <title>Document</title>
</head>
<body>
 
<?php include 'header.php' ?>

  <main>
    <div class="bgpicture">
      <div class="slogan">
        <h1>POUR YOUR HEART IN ART</h1>
      </div>
    </div>
    
    <div class="content-container">
        <a href="newart.php" class="button">
        <div class="new-container">
          <div class="new-content"> 
          </div> 
        </a>
        <h1>NEW THIS WEEK</h1>
      </div>

      <div class="paint-container">
      <a href="paintings.php" class="button">
        <div class="painting"> 
          </div>
        </a>     
        <h1>PAINTING</h1>
      </div>

      <div class="photo-container">
      <a href="photography.php" class="button">
        <div class="photography">
        </div>
      </a>
        <h1>PHOTOGRAPHY</h1>
      </div>
    </div>

     <div class="about-us">
      <div class="about-us-image"> 
      </div>

       <div class="about-us-text" id="aboutus"> 
        <h1 style="text-align: center;">ABOUT US</h1>
        <h2 style="text-align:right;">“Kalā”,in Nepalese means “Art”</h2>
       </div>
    </div>

    <div class="connect" id="connectwithus">
      <h1>CONNECT WITH US</h1>
      <div class="contact-form">
        <form action="includes/contactUs.inc.php" method="POST">
          <label for="">Name</label>
          <input type="text" name="name">

          <label for="">E-mail</label>
          <input type="email" name="email">

          <label for="">Message</label>
          <input type="text" name="msg">

          <button type="submit">Submit</button>

        </form>
      </div>
    </div>
  </main>

  <?php include 'footer.php' ?>

</body>
</html>