<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - Online Clothing Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./css/contactus.css">
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
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <?php if (isset($_SESSION["id"])) { ?>
          <a href="logout.php" id="login"><button>Logout</button></a>
          <?php if ($_SESSION["isAdmin"] == true) { ?>
            <a href="admin.php" id="login"><button>Admin</button></a>
          <?php }
        } else { ?>
          <a href="login.php" id="login"><button>Login</button></a>
        <?php } ?>
      </nav>
      <a href="cart.php"> <img src="./images/cart.png" width="30px" height="30px"></a>
    </div>
  </div>
  <main style="margin: 0px;">
    <div class="contact">
      <iframe id="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.7032932384786!2d85.33294897556053!3d27.69556387618938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19981515851b%3A0xfec90a9c10078a58!2sAmbition%20College!5e0!3m2!1sen!2snp!4v1691139051486!5m2!1sen!2snp"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      CONTACT ADDRESS<br>
      AMBITION COLLEGE<br>
      MID BANESHWOR, KATHMANDU, NEPAL<br>
      <br>
      <div class="center">
        <form action="#" method="POST">
          <div class="txt_field">
            <label>Full Name</label>
            <span></span>
            <input type="text" required>
          </div>
          <div class="txt_field">
            <label>Email</label>
            <span></span>
            <input type="email" required>
          </div>
          <div class="txt_field">
            <label>Phone</label>
            <span></span>
            <input type="number" required>
          </div>
          <div class="txt_field">
            <label>Description</label>
            <br>
            <textarea cols="40" rows="10"></textarea>
          </div>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </main>

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