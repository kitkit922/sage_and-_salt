<?php
$servername = "localhost";
$username = "root";
$password = ""; // Use the appropriate password
$dbname = "sas"; // Consider using a different database or rename appropriately

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create database if it does not exist
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql);

    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // SQL to create table if it does not exist
    $sql = "CREATE TABLE IF NOT EXISTS reservations (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100),
        phone VARCHAR(20),
        date DATE,
        time TIME,
        guests INT,
        PRIMARY KEY(id)
    )";
    $conn->exec($sql);

    // Insert new reservation entry
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $guests = $_POST['guests'];

        $sql = "INSERT INTO reservations (name, email, phone, date, time, guests) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $email, $phone, $date, $time, $guests]);

        // Redirect back to the reservation page with success message
        header("Location: reservation.php?success=1");
        exit;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
