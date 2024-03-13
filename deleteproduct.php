<?php

session_start();
if (!isset($_SESSION['id'])) {
    echo ("<script>alert('Login to continue'); window.location.href='login.php';</script>");
}
$id          = $_GET['id'];
$conn        = mysqli_connect("localhost", "ODBC", "", "shopping");
$table_sql   = "SELECT * FROM `product-details` WHERE `id` = '$id'";
$table_query = mysqli_query($conn, $table_sql);
$products   = mysqli_fetch_assoc($table_query);
if (!$products > 0) {
    die("No data found");
}
$sql = "DELETE FROM `product-details` WHERE `id` = '$id'";
mysqli_query($conn, $sql);
header("Location: admin.php");
