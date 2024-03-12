<?php
$totalCost  = $_GET['cost'];
$totalItems = $_GET['quantity'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/payment.css">
    <title>Payment</title>
</head>

<body>
    <form>
        <div class='container'>
            <div class="card mx-auto col-md-5 col-8 mt-3 p-0">
                <!-- <img class='mx-auto pic'
                src="https://i.imgur.com/kXUgBQZ.jpg"/>
            <div class="card-title d-flex px-4">
                <p class="item text-muted">Barcelona<label class="register">&reg;</label> Chair</p>
                <p>$5760</p>
            </div> -->
                <div class="card-body">
                    <p class="text-muted">Your payment details</p>
                    <div class=" mb-3">
                        <i class=" col-1 fas p-0"></i>
                        <input class="p-0 col-lg-12 text-center" disabled type="text"
                            value="Total Items: <?php echo $totalItems; ?>">
                    </div>
                    <div class=" mb-3">
                        <i class=" col-1 fas p-0"></i>
                        <input class="p-0 col-lg-12 text-center" disabled type="text"
                            value="Total Price: <?php echo $totalCost; ?>">
                    </div>
                    <div class="numbr mb-3">
                        <i class=" col-1 fas fa-credit-card text-muted p-0"></i>
                        <input class="col-10 p-0" type="text" placeholder="Card Number">
                    </div>
                    <div class="line2 col-lg-12 col-12 mb-4">
                        <i class="col-1 far fa-calendar-minus text-muted p-0"></i>
                        <input class="cal col-5 p-0" type="text" placeholder="MM/YY">
                        <i class="col-1 fas fa-lock text-muted"></i>
                        <input class="cvc col-5 p-0" type="text" placeholder="CVC">
                    </div>
                </div>
                <div class="footer text-center p-0">
                    <div class="col-lg-12 col-12 p-0">
                        <!-- Add js client side verification yourself! -->
                        <p class="order" onclick="window.location.href='success.php'">Order Now</p>
                    </div>
                </div>
            </div>

        </div>
    </form>
</body>

</html>