<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sage & Salt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Styles/admin.css">
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="container mt-5">
        <h1>Welcome, Admin!</h1>
        <p class="lead">Here's what's happening with your restaurant today:</p>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Orders</div>
                    <div class="card-body">
                        <h5 class="card-title">View and Manage Orders</h5>
                        <p class="card-text">Overview of recent orders and manage them.</p>
                        <a href="manage_orders.php" class="btn btn-light">Manage Orders</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <h5 class="card-title">Update Menu Items</h5>
                        <p class="card-text">Add, remove, or modify items on your menu.</p>
                        <a href="manage_menu.php" class="btn btn-light">Update Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Feedback</div>
                    <div class="card-body">
                        <h5 class="card-title">Customer Feedback</h5>
                        <p class="card-text">Read and respond to customer feedback.</p>
                        <a href="manage_feedback.php" class="btn btn-light">View Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
