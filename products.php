<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Online Clothing Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="./images/logoo.jpg" width="125px">
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="Account">Account</a></li>
          </ul>        
        </nav>
        <a href="cart.html"> <img src="./images/cart.png" width="30px" height="30px"></a>
      </div> 
    </div> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - Online Clothing Website</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="./images/logoo.jpg" width="125px">
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="contactus.html">Contact Us</a></li>
          <li><a href="Account">Account</a></li>
        </ul>
      </nav>
      <a href="cart.html"> <img src="./images/cart.png" width="30px" height="30px"></a>
    </div>
  </div>

  <div class="small-container">
    <div class="row row-2">
      <h2>All Products</h2>
      <select>
        <option>Default Sorting</option>
        <option>Short by price</option>
        <option>Short by Popularity</option>
        <option>Short by rating</option>
        <option>Short by sale</option>
      </select>
    </div>
    <div class="row">
      <?php
      $conn   = mysqli_connect("localhost", "ODBC", "", "shopping");
      $result = mysqli_query($conn, "SELECT * FROM `product-details` ");

      //Run a while loop to get all items in database
      while ($row = mysqli_fetch_assoc($result)) {
        //Details for each item one by one in the database
        $product_id           = $row['id'];
        $product_name         = $row['name'];
        $product_image_source = $row['images'];
        $product_price        = $row['price'];
        ?>
        <!-- Product card for the current item/row of the database  -->
        <a class="col-4" href="./productdetails.php?id=<?php echo ($product_id); ?>">
          <img src="<?php echo ($product_image_source); ?>">
          <h4>
            <?php echo ($product_name); ?>
          </h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>
            <?php echo ($product_price); ?>
          </p>
        </a>
      <?php } ?>

    </div>

    <div class="page-btn">
      <span>1</span>
      <span>2</span>
      <span>3</span>
      <span>4</span>
      <span>&#8594;</span>
    </div>
  </div>


  <!--------- footer-------------->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3> Download Our App</h3>
          <p>Download App for Android and ios mobile phone.</p>
          <div class="app-logo">
            <img src="./images/appstore.png">
            <img src="./images/google-play.png">
          </div>
        </div>
        <div class="footer-col-2">
          <img src="./images/logoo.jpg">
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Quos, nobis magnam iure totam excepturi illo! lorem5
          </p>
        </div>
        <div class="footer-col-3">
          <h3> Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Posts</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Youtube</li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright 2024 - All Rights Reserved</p>
    </div>
  </div>

</body>

</html>