<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sage & Salt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Styles/register.css">
</head>

<body class="bg-light">
    <?php include 'components/header.php'; ?>
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Create Your Account</h1>
                        <form method="post" action="submit_registration.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">User Name</label>
                                <input type="text" class="form-control" name="username" required placeholder="Choose a username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required placeholder="Create a password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <?php
                            if (isset($_GET['status']) && $_GET['status'] == 'fail') {
                                echo '<p style="color: red; text-align: center;">Username already exists. Registration not successful.</p>';
                            }
                            if (isset($_GET['registration']) && $_GET['registration'] == 'success') {
                                echo '<p style="color: green; text-align: center;">Registration successful. You can now log in.</p>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $file = fopen("users.txt", "a"); // Open the file in append mode
    fwrite($file, "$username,$email," . md5($password) . "\n"); // Write the data
    fclose($file); // Close the file

    echo '<p style="color:green;text-align:center;">Registered successfully!</p>';
}
?>