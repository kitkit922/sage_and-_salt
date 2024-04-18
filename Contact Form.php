<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Contact us
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/Logo.jpg">
    <link rel="stylesheet" href="Styles/Contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php
include 'components/header.php';
?>

<br>

<body>


    <div class="container3">
        <h2>Contact Us</h2>
    </div>
    <br>

    <div class="container2">
        <form action="Contact Form.html" id="loginForm" method="post">

            <label for="fname">First Name</label>
            <br>
            <input type="text" id="fname" class="form-control" name="firstname" placeholder="Your name..">
            <br>
            <label for="lname">Last Name</label>
            <br>
            <input type="text" id="lname" class="form-control" name="lastname" placeholder="Your last name..">
            <br>
            <label for="email">Email</label>
            <br>
            <input type="email" id="email" class="form-control" name="email" placeholder="example@email.com">
            <br>
            <label for="country">Country </label>
            <br>
            <select id="country" class="form-control" name="country">
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>
            <br><br>
            <label for="subject">Subject</label>
            <br>
            <textarea id="subject" class="form-control" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            <br>
            <input type="submit" value="Submit">

        </form>
    </div>
    <div id="message"></div>


    <br>
    <?php
    include 'components/footer.php';
    ?>



    <script src="scripts/myscripts.js"></script>
    <script src="scripts/Contact.js"></script>


</body>

</html>