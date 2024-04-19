<?php
$servername = "localhost";
$username = "root";
$password = ""; // Use the appropriate password
$dbname = "sas"; // Consider using a separate database or rename appropriately

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create database if it does not exist
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql);

    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL to create table if it does not exist
    $sql = "CREATE TABLE IF NOT EXISTS contacts (
        id INT NOT NULL AUTO_INCREMENT,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        country VARCHAR(50),
        comment_box TEXT,
        PRIMARY KEY(id)
    )";
    $conn->exec($sql);
    echo "Table ensured.<br>"; // Debug: confirm table creation

    // Insert new contact entry
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $comment_box = $_POST['comment_box'];

        $sql = "INSERT INTO contacts (firstname, lastname, email, country, comment_box) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$firstname, $lastname, $email, $country, $comment_box]);
        header("Location: Contact_Form.php?success=1");
        exit;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>
