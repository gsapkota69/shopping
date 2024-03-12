<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounderd bd-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-8">
<table>
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead class="text-center">
  <tbody>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> 
            </div>
        </div>
    </div>
    
</body>
</html>