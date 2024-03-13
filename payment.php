<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
$totalCost  = $_GET['cost'];
$totalItems = $_GET['quantity'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connect to the database
    $db = new mysqli('localhost', 'ODBC', '', 'shopping');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $username   = $_POST['username'];
    $pin        = $_POST['pin'];
    $totalCost  = $_POST['cost'];
    $totalItems = $_POST['quantity'];


    // Get the last ID from the payment table
    $result = $db->query("SELECT MAX(id) AS max_id FROM payment");
    $row    = $result->fetch_assoc();
    $id     = $row['max_id'] + 1;

    // Insert the new data into the payment table
    $stmt = $db->prepare("INSERT INTO payment (id, username, payment_pin, total_cost) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("issd", $id, $username, $pin, $totalCost);

    if ($stmt->execute()) {
        echo "<script>window.location.href = 'success.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
        die("Error: " . $stmt->error);
    }

    $stmt->close();
    $db->close();
}
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
    <form method="POST" action="payment.php?cost=<?php echo $totalCost; ?>&quantity=<?php echo $totalItems; ?>"
        id="paymentForm">
        <div class='container'>
            <div class="card mx-auto col-md-5 col-8 mt-3 p-0">
                <div class="card-body">
                    <p class="text-muted">Your payment details</p>
                    <div class=" mb-3" hidden>
                        <i class=" col-1 fas p-0">Username: </i>
                        <input class="p-0 col-lg-12 text-center" id="username" name="username" readonly type="text"
                            value="<?php echo $_SESSION["username"]; ?>">
                    </div>
                    <div class=" mb-3">
                        <i class=" col-1 fas p-0">Total Items: </i>
                        <input class="p-0 col-lg-12 text-center" readonly type="text"
                            value="<?php echo $totalItems; ?>">
                    </div>
                    <div class=" mb-3">
                        <i class=" col-1 fas p-0">Total Price: </i>
                        <input class="p-0 col-lg-12 text-center" name="cost" readonly type="text"
                            value="<?php echo $totalCost; ?>">
                    </div>
                    <div class="numbr mb-3">
                        <i class=" col-1 fas fa-credit-card text-muted p-0"></i>
                        <input class="col-10 p-0" type="text" placeholder="Card Number" name="pin" required
                            pattern="\d{16}">
                    </div>
                    <div class="line2 col-lg-12 col-12 mb-4">
                        <i class="col-1 far fa-calendar-minus text-muted p-0"></i>
                        <input class="cal col-5 p-0" type="text" placeholder="MM/YY" name="expiryDate" required
                            pattern="(0[1-9]|1[0-2])\/\d{2}">
                        <i class="col-1 fas fa-lock text-muted"></i>
                        <input class="cvc col-5 p-0" type="text" placeholder="CVC" required pattern="\d{3}">
                    </div>
                </div>
                <div class="footer text-center p-0">
                    <div class="col-lg-12 col-12 p-0">
                        <!-- Add js client side verification yourself! -->
                        <input type="submit" name="submit" value="Order Now" class="order">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.getElementById('paymentForm').addEventListener('submit', function (event) {
            var cardNumber = document.getElementsByName('pin')[0].value;
            var expiryDate = document.getElementsByName('expiryDate')[0].value;
            var cvc = document.getElementsByName('cvc')[0].value;

            // Validate card number
            if (!/^\d{16}$/.test(cardNumber)) {
                alert('Invalid card number');
                event.preventDefault();
            }

            // Validate expiry date
            if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiryDate)) {
                alert('Invalid expiry date');
                event.preventDefault();
            }

            // Validate CVC
            if (!/^\d{3}$/.test(cvc)) {
                alert('Invalid CVC');
                event.preventDefault();
            }
        });
    </script>
</body>

</html>