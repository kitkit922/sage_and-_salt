<?php
// Include the database connection file
include 'db_connection.php';

session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    header("Location: admin_panel.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check credentials
    // For example, you can hardcode username and password for now
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    
    // Execute the statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        header("Location: admin_panel.php");
        exit;
    } else {
        echo "Invalid username or password";
    }

    // Close statement
    $stmt->close();
}
?>