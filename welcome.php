<?php require 'partials/_nav.php'; ?>
<?php
include("partials/_dbconnect.php");
session_start();

if (!isset($_SESSION['useremail'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CDN -->
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    
    </head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mb-3">Welcome, <?php echo $_SESSION['useremail']; ?></h1>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
