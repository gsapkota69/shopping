<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Clothing Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
<body>
    <div class="header">
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
        </ul>  
        <?php if(isset($_SESSION["id"])){ ?>
            <a href="logout.php" id="login"><button >Logout</button></a>
            <?php if($_SESSION["isAdmin"] == true){ ?>
                <a href="admin.php" id="login"><button >Admin</button></a>
        <?php }}else{ ?>
            <a href="login.php" id="login"><button >Login</button></a>
        <?php } ?>      
    </nav>
    <a href="cart.html"> <img src="./images/cart.png" width="30px" height="30px"></a>
  </div> 
  <div class="row">
    <div class="col-2">
    <h1>Lorem ipsum dolor sit amet.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> 
        Reiciendis, est soluta excepturi rerum, molestiae distinctio 
        deleniti corporis laboriosam maiores<br> minima ex eligendi? Assumenda
         vel repellat fuga magni esse. Soluta, placeat?</p>
         <a href="" class="btn">Explore Now &#8594;</a>
        </div>
    <div class="col-2">
        <img src="./images/model.png" >
    </div>
    <h1></h1>
  </div>
</div> 
</div>

<div class ="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
            <img src="./images/categories1.avif">
        </div>
            <div class="col-3">
            <img src="./images/categories2.avif">
        </div>
            <div class="col-3">
            <img src="./images/categories3.avif">
        </div>
        </div>
    </div>
    
</div>

<div class="small-container">
    <h2 class="title"> Featured Products</h2>
    <div class="row">
        
        <div class="col-4">
          <img src="./images/product1.avif">
          <h4>Graphite color T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$40</p>
        </div>

        <div class="col-4">
            <img src="./images/product2.avif">
            <h4>YPB neoKNIT MAX Popover</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <p>$90</p>
          </div>
          <div class="col-4">
            <img src="./images/product3.avif">
            <h4>A&F Sloane Tailored Pant</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <p>$90</p>
          </div>
          <div class="col-4">
            <img src="./images/product4.avif">
            <h4>Hooded Ultra Utility Puffer</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <p>$100</p>
          </div> 
    </div>
    <h2 class="title">  Latest Products</h2>
    <div class="row">
      <div class="col-4">
        <img src="./images/product5.avif">
        <h4>YPB Restore Hoodie</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$100</p>
      </div>
      <div class="col-4">
          <img src="./images/product6.avif">
          <h4>YPB neoWARM Full-Zip</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$90</p>
        </div>
        <div class="col-4">
          <img src="./images/product7.avif">
          <h4>YPB Gym & Back Shirt Jacket</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$140</p>
        </div>
        <div class="col-4">
          <img src="./images/product8.avif">
          <h4>YPB Active Puffer</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$180</p>
        </div> 
  </div>
  <div class="row">
    <div class="col-4">
      <img src="./images/product9.avif">
      <h4>YPB motionTEK Jogger</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>$60</p>
    </div>
    <div class="col-4">
        <img src="./images/product10.avif">
        <h4>YPB Après Puffer</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$150</p>
      </div>
      <div class="col-4">
        <img src="./images/product11.avif">
        <h4>YPB sculptLUX Mini Dress</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$100</p>
      </div>
      <div class="col-4">
        <img src="./images/product12.avif">
        <h4>YPB neoKNIT Mini Crew</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$80</p>
      </div> 
</div>
</div>

<!--------testimonial-------------->
 <div class="testimonial">
  <div class="small-containe">
    <div class="row">
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>Lorem ipsum dolor sit Lorem ipsum dolor sit.
          Lorem, ipsum dolor sit amet consectetur adipisicing.
           amet consectetur adipisicing elit. Labore?</p>
           <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="./images/user1.webp">
          <h3>Jimmy Bhattrai</h3>
      </div> 
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>Lorem ipsum dolor sit Lorem ipsum dolor sit.
          Lorem, ipsum dolor sit amet consectetur adipisicing.
           amet consectetur adipisicing elit. Labore?</p>
           <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="./images/user2.jpg">
          <h3>Felix Kumar</h3>
      </div> 
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>Lorem ipsum dolor sit Lorem ipsum dolor sit.
          Lorem, ipsum dolor sit amet consectetur adipisicing.
           amet consectetur adipisicing elit. Labore?</p>
           <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="./images/user3.webp">
          <h3>Falam Bahadur</h3>
      </div> 
    </div>
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