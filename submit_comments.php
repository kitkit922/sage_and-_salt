
    <?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "sas_comments";

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
        $sql = "CREATE TABLE IF NOT EXISTS comments (
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            comment VARCHAR(500) NOT NULL,
            stars INT NOT NULL,
            PRIMARY KEY(id)
        )";
        $conn->exec($sql);

        // Insert new entry
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $stars = $_POST['rating'];

            $sql = "INSERT INTO comments (name, comment, stars) VALUES (?, ?, ?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$name, $comment, $stars]);

            header("Location: comments.php?success=1");
            exit;
        }

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
    ?>

