<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sage & Salt &reg;</title>
  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" type="image/x-icon" href="Images/Logo.jpg">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="Styles/style.css">
</head>

<video autoplay muted loop id="myVideo">
  <source src="assets/vid.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<!-- Navbar -->
<?php
include 'components/header.php';
?>
<?php
session_start(); // Start or resume a session

// Check login status message and display it
if (isset($_SESSION['login_status'])) {
    if ($_SESSION['login_status'] == 'success') {
        echo '<p style="color: green; text-align: center;">Login successful.</p>';
    } else if ($_SESSION['login_status'] == 'failure') {
        echo '<p style="color: red; text-align: center;">Login unsuccessful. Please try again.</p>';
    }

    // Clear the login status message so it doesn't keep showing
    unset($_SESSION['login_status']);
}
?>

<!-- Header -->
<header class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">New Spring Collection for Men</h1>
    <p class="lead">Discover the latest trends and styles for this season.</p>
    <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
  </div>
</header>


<body>
  <section class="container my-5">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Dine in starts</a>
            </h4>
            <h5>2.00pm</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Our Unique Gourmet</a>
            </h4>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
  </section>

  <script src="scripts/myscripts.js"></script>
</body>
<html>