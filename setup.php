<?php

$servername = "localhost";
$username   = "ODBC";
$password   = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop database with similar name
$sql = "DROP DATABASE IF EXISTS shopping";
if ($conn->query($sql) === TRUE) {
    echo "Database dropped successfully<br>";
} else {
    echo "Error dropping database: " . $conn->error . "<br>";
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS shopping";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("shopping");

// Create product-details table
$sql = "CREATE TABLE IF NOT EXISTS `product-details` (
    id int(11) NOT NULL,
    name varchar(50) NOT NULL,
    images varchar(50) NOT NULL,
    price varchar(70) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table product-details created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert data into product-details table
$sql = "INSERT INTO `product-details` (id, name, images, price) VALUES
        (1, 'Graphite color T-shirt', './images/product1.avif', '$40'),
        (2, 'YPB neoKNIT MAX Popover', './images/product2.avif', '$90'),
        (3, 'A&F Sloane Tailored Pant', './images/product3.avif', '$90'),
        (4, 'Hooded Ultra Utility Puffer', './images/product4.avif', '$100'),
        (5, 'YPB Restore Hoodie', './images/product5.avif', '$100'),
        (6, 'YPB neoWARM Full-Zip', './images/product6.avif', '$90'),
        (7, 'YPB Gym & Back Shirt Jacket', './images/product7.avif', '$140'),
        (8, 'YPB Active Puffer', './images/product8.avif', '$180'),
        (9, 'YPB motionTEK Jogger', './images/product9.avif', '$60'),
        (10, 'YPB Après Puffer', './images/product10.avif', '$150'),
        (11, 'YPB sculptLUX Mini Dress', './images/product11.avif', '$100'),
        (12, 'YPB neoKNIT Mini Crew', './images/product12.avif', '$80')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted into product-details table successfully<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

//Create users

$sql = "CREATE TABLE IF NOT EXISTS users (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(50) DEFAULT NULL,
    email varchar(50) DEFAULT NULL,
    username varchar(50) DEFAULT NULL,
    password varchar(50) DEFAULT NULL,
    PRIMARY KEY (id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// INSERT INTO `users`=
$sql = "INSERT INTO users (id, name, email, password, username) VALUES
    (1, 'G S', 'gs@gmail.com', 'gaurab', 'gaurab'),
    (2, 'Gaurab Sapkota', 'gaurab@gmail.com', 'gaurab', 'gs')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted into users table successfully<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

// Create admin table
$sql = "CREATE TABLE IF NOT EXISTS admin (
    id int(11) NOT NULL,
    name varchar(70) NOT NULL,
    email varchar(70) NOT NULL,
    username varchar(70) NOT NULL,
    password varchar(70) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table admin created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Add primary key and auto-increment to admin table
$sql = "ALTER TABLE admin
    ADD PRIMARY KEY (id),
    MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2";
if ($conn->query($sql) === TRUE) {
    echo "Primary key and auto-increment added to admin table successfully<br>";
} else {
    echo "Error adding primary key and auto-increment: " . $conn->error . "<br>";
}

// Insert data into admin table
$sql = "INSERT INTO admin (id, name, email, username, password) VALUES
    (1, 'gaurab', 'sgaurab49@gmail.com', 'gaurabs', '123'),
    (2, 'gs', 'gaurab@gmail.com', 'gaurab', 'gaurab')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted into admin table successfully<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

//Add payment table
$sql = "CREATE TABLE IF NOT EXISTS `payment` (
    `id` int(11) NOT NULL,
    `username` varchar(70) NOT NULL,
    `payment_pin` varchar(16) NOT NULL,
    `total_cost` varchar(70) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table payment created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

echo ("<br><br><br>Successful, now you may start using the webapp!<br>");

$conn->close();
