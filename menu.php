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

    <link rel="stylesheet" href="Styles/menstyle.css">
</head>

<body>
    <?php
    include 'components\header.php';
    ?>
    <main>
        <section class="jumbotron text-center">
            <h1 class="display-4">Our Menu</h1>
            <p class="lead">Enjoy the Best cuisine </p>
            <a href="#" id="shop-now-btn" class="btn btn-primary">Shop Now</a>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Images/B-Burger.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Beef Burger</h5>
                            <p class="card-text">$14.99</p>
                            <a href="#" class="btn btn-primary" id="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Images/image-51.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Burrito</h5>
                            <p class="card-text">$19.99</p>
                            <a href="#" class="btn btn-primary" id="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Images/souvlaki.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Soulaki</h5>
                            <p class="card-text">$9.99</p>
                            <a href="#" class="btn btn-primary" id="add-to-cart-btn">Add to Cart</a>
                        </div>
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