<?php
session_start();
$conn       = mysqli_connect("localhost", "ODBC", "", "shopping");
$product_id = $_GET["id"]; //Get the id from the URL i.e item.php?id=
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>

<body>

    <?php
    //Select the product from database based on the id received from the URL
    $result = mysqli_query($conn, "SELECT * FROM `product-details` WHERE id = '$product_id' ");
    if (mysqli_num_rows($result)>0) {
        $row                  = mysqli_fetch_assoc($result);
        $product_id           = $row['id'];
        $product_name         = $row['name'];
        $product_image_source = $row['images'];
        $product_price        = $row['price'];
        ?>

        <!-- Change following to do what you want to do for the given product:  -->

        <a class="col-4" href="./item.php?id=<?php echo ($product_id); ?>">
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

        <?php
    }
    ?>

</body>

</html>