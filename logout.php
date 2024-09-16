<?php
session_start();
unset($_SESSION['useremail']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require 'partials/_nav.php'; ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm rounded" style="width: 100%; max-width: 400px;">
            <h1 class="text-center mb-4">You have been logged out</h1>
            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" onclick="location.href='login.php'">Login Again</button>
                <button class="btn btn-warning btn-lg" onclick="location.href='login.php'">😔</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
