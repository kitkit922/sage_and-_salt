<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sage & Salt &reg;</title>
  <link rel="shortcut icon" type="image/x-icon" href="Images/Logo.jpg">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS15kN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="Styles/comments_style.css">


</head>

<body>
<?php
  include 'components/header.php'; // Make sure the path uses forward slashes
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
    $conn->query("use $dbname"); // Switch to the database

    // Create table if it does not exist
    $sql = "CREATE TABLE IF NOT EXISTS comments (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        comment VARCHAR(500) NOT NULL,
        stars INT NOT NULL,
        PRIMARY KEY(id)
    )";
    $conn->exec($sql);

    // Prepare a SELECT statement to fetch the last 5 comments
    $stmt = $conn->prepare("SELECT name, comment, stars FROM comments ORDER BY id DESC LIMIT 5");
    $stmt->execute();

    // Fetch the results
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>
  <main>
    <section class="jumbotron text-center">
      <h1 class="display-5">Comments </h1>
      <p class="lead">Welcome to tell us your thoughts! </p>
    </section>
    <div class="container">
      <!-- Display recent comments -->
      <div class="recent-comments">
        <h3 class="text-center">Recent Comments</h3>
        <div class="comments-container">
          <?php if (!empty($comments)) : ?>
            <?php foreach ($comments as $comment) : ?>
              <div class="comment-item">
                <div class="row">
                  <div class="col-12">
                    <div class="comment-name"><?= htmlspecialchars($comment['name']); ?></div>
                  </div>
                  <div class="col-12">
                    <p class="comment-text"><?= htmlspecialchars($comment['comment']); ?></p>
                  </div>
                  <div class="col-12">
                    <small class="comment-rating">Rating: <?= htmlspecialchars($comment['stars']); ?> stars</small>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
            <p class="text-center">No comments found.</p>
          <?php endif; ?>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reservation-form">
              <h2 class="text-center mb-4">Tell us some comments</h2>
              <form method="post" action="submit_comments.php">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <label for="comment">Comments</label>
                  <textarea class="form-control" id="comment" name="comment" placeholder="Enter your comments" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label>Rating</label>
                  <div class="rating">
                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                  </div>
                </div>
                <input type="hidden" id="rating" name="rating" value="0">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>
                  <div class="alert alert-success" role="alert">
                    Submission successful!
                  </div>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
  </main>
  <script>
    const stars = document.querySelectorAll('.rating > span');
    const ratingInput = document.getElementById('rating');
    stars.forEach((star, index) => {
      star.addEventListener('click', () => {
        ratingInput.value = 5 - index; // Set the rating input's value based on star clicked
        updateStars(index);
      });
    });

    function updateStars(index) {
      stars.forEach((star, idx) => {
        if (idx <= index) {
          star.classList.add('selected');
        } else {
          star.classList.remove('selected');
        }
      });
    }
  </script>

  <!-- Footer -->
  <?php
  include 'components\footer.php';
  ?>



  <script src="scripts/mens.js"></script>
  <script src="scripts/myscripts.js"></script>
  <script src="scripts/cart.js"></script>
</body>

</html>