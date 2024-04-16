<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "RESERVATIONS"; 

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it does not exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql_create_db) === FALSE) {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($database);

// Create table if it does not exist
$sql_create_table = "CREATE TABLE IF NOT EXISTS reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    guests INT NOT NULL
)";
if ($conn->query($sql_create_table) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
