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

    <link rel="stylesheet" href="Styles/womenstyle.css">
</head>

<body>
    <?php
    include 'components\header.php';
    ?>
    <main>
        <section class="jumbotron text-center">
            <h1 class="display-4">Make A reservation </h1>
            <p class="lead">Enjoy the World class food experiance </p>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="reservation-form">
                        <h2 class="text-center mb-4">Make a Reservation</h2>
                        <form method="post" action="submit_reservation.php"> <!-- Here, we added method="post" and action="submit_reservation.php" -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"> <!-- Added name attribute -->
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"> <!-- Added name attribute -->
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"> <!-- Added name attribute -->
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date"> <!-- Added name attribute -->
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time" name="time"> <!-- Added name attribute -->
                            </div>
                            <div class="form-group">
                                <label for="guests">Number of Guests</label>
                                <input type="number" class="form-control" id="guests" name="guests" min="1"> <!-- Added name attribute -->
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit Reservation</button>
                            <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>
                                <div class="alert alert-success" role="alert">
                                    Reservation submitted successfully!
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php
    include 'components\footer.php';
    ?>
    <script src="scripts/mens.js"></script>
    <script src="scripts/myscripts.js"></script>
    <script src="scripts/cart.js"></script>
</body>

</html>