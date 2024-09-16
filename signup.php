<?php require 'partials/_nav.php' ?>
<?php

include("partials/_dbconnect.php");

if (isset($_POST['btnsubmit'])) {
    $fname = $_POST['txtfirstname'];
    $lname = $_POST['txtlastname'];
    $address = $_POST['txtaddress'];
    $mobile = $_POST['txtmobile'];
    $email = $_POST['txtemail'];
    $password = $_POST['txtpassword'];

    // Inserting data into the database
    $insert = "INSERT INTO tbl_registration VALUES (0, '$fname', '$lname', '$address', '$mobile', '$email', '$password')";
    if (mysqli_query($conn, $insert)) {
        echo "<div class='alert alert-success text-center' role='alert'>Success: Registration done successfully</div>";
    } else {
        echo "<div class='alert alert-danger text-center' role='alert'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Project - Registration</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">    
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="max-width: 500px; width: 100%;">
            <div class="text-center mb-4">
                <h1>Car Project - Registration</h1>
                <a href="login.php" class="btn btn-outline-primary mt-2">Already have an account? Login</a>
            </div>

            <form method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="txtfirstname" placeholder="Enter your first name" required>
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="txtlastname" placeholder="Enter your last name" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="txtaddress" rows="3" placeholder="Enter your address" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="txtmobile" placeholder="Enter your mobile number" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="txtemail" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="txtpassword" placeholder="Enter your password" required>
                </div>

                <button type="submit" name="btnsubmit" class="btn btn-success w-100">Register</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
