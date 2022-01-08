<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/utils.css" type="text/css">
  <link rel="stylesheet" href="css/checkout.css" type="text/css">

  
  <title>Document</title>
</head>
<body>

<?php include 'header.php' ?>

<main>
  <div class="checkoutInfo">
    <h2>Upload</h2>
    <p>Fill The Required Information Below</p>
</div>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-50">
                        <label for="title">Title</label>
                        <input type="text" id="adr" name="title" placeholder="Title">
                        <label for="price">price</label>
                        <input type="text" id="city" name="price" placeholder="kinta">
                        <label for="price">Type</label>
                        <select name="type">
                            <option value="newthisweek">New this week</option>
                            <option value="painting">Paintings</option>
                            <option value="photography">Photography</option>
                        </select>

                        <label for="image">Description</label>
                        <textarea type="text"  name="description" cols="30" rows="10"></textarea>
                        
                        <input type="file" name="image">
                    </div>

                </div>
                <input type="submit" value="Upload" class="btn">
            </form>
        </div>
    </div>
</div>

</main>
<?php include 'footer.php' ?>

</body>
</html>