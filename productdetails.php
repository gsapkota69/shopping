<?php
session_start();
$conn       = mysqli_connect("localhost", "ODBC", "", "shopping");
$product_id = $_GET["id"]; //Get the id from the URL i.e item.php?id=
$username   = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - Online Clothing Website</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="./scripts/product.js"></script>
  <script>
    initiateCart('<?php echo $username; ?>');
  </script>
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
      <a href="cart.php"> <img src="./images/cart.png" width="30px" height="30px"></a>
    </div>
  </div>

  <!----------single product details -------->


  <?php
  //Select the product from database based on the id received from the URL
  $result = mysqli_query($conn, "SELECT * FROM `product-details` WHERE id = '$product_id' ");
  if (mysqli_num_rows($result) > 0) {
    $row                  = mysqli_fetch_assoc($result);
    $product_id           = $row['id'];
    $product_name         = $row['name'];
    $product_image_source = $row['images'];
    $product_price        = $row['price'];
    ?>
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="<?php echo ($product_image_source); ?>" width="100%">
        </div>
        <div class="col-2">
          <p>Home / T-shirt</p>
          <h1 name="product_name">
            <?php echo ($product_name); ?>
          </h1>
          <h4 name="product_price">
            <?php echo ($product_price); ?>
          </h4>
          <select name="product_size">
            <option disabled>Select Size</option>
            <option>XXL</option>
            <option>XL</option>
            <option>Large</option>
            <option>Medium</option>
            <option>Small</option>
          </select>
          <input type="number" value="1" name="product_quantity">
          <button class="btn" onclick="addToCart('<?php echo $username; ?>')">Add to Cart</button>
          <h3>Product Details</h3>
          <br>
          <p>Lorem ipsum dolor sit, amet consectetur
            adipisicing elit. Laboriosam, sapiente fugit?</p>

        </div>
      </div>
    </div>
  <?php } ?>

  <!-----title-->
  <div class="small-container">
    <div class="row row-2">
      <h2>Related Products</h2>
      <p>View More</p>
    </div>
  </div>



  <div class="small-container">
    <div class="row">
      <?php
      //Get 4 items from the database except current one
      $resultExtra = mysqli_query($conn, "SELECT * FROM `product-details` WHERE NOT id = $product_id  LIMIT 4 ");

      //Run a while loop to get all items in database
      while ($row = mysqli_fetch_assoc($resultExtra)) {
        //Details for each item one by one in the database
        $product_id           = $row['id'];
        $product_name         = $row['name'];
        $product_image_source = $row['images'];
        $product_price        = $row['price'];
        ?>
        <a class="col-4" href="productdetails.php?id=<?php echo ($product_id); ?>">
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