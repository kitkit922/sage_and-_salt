
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sage & Salt</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/Logo.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Styles/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style=" font-family: Arial, sans-serif; background-color: #f5f5f5;">
<?php
include 'components\header.php';
?>
<main style=" max-width: 500px; margin: 0 auto; padding: 20px; background-color: #fff; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
    <h1 style=" text-align: center; font-size: 28px;margin-bottom: 20px;">Login to Your Account</h1>
    <form method="post" action="login.php">
        <fieldset id="loginn">
            <label for="username">User Name</label>
            <input type="text" name="username" required placeholder="abc@gmail.com">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" required placeholder="password">
            <br>
            <input type="checkbox" id="remember" name="rememer">
            <label for="remember">Remember my login information</label>
            <br>
            <input type="submit" value="Login">
            <input type="button" value="Register">
        </fieldset>
    </form>
</main>
<?php
include 'components\footer.php';
?>

<script src="scripts/myscripts.js"></script>
</body>
</html>
