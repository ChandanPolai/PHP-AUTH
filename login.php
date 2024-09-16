<?php require 'partials/_nav.php' ?>
<?php
session_start();
include("partials/_dbconnect.php");

function login($email, $password)
{
    global $conn;
    $select = "select * from tbl_registration where email='$email' and password='$password'";
    $result = mysqli_query($conn, $select);
    $checkRecord = mysqli_num_rows($result);
    if ($checkRecord > 0) {
        $_SESSION['useremail'] = $email;
        header("location: welcome.php");
    } else {
        $error = "Either email or password is wrong";
        return $error;
    }
}
if (isset($_POST['btnsubmit'])) {
    $error = login($_POST['txtemail'], $_POST['txtpassword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Program</title>
    <!-- Bootstrap CDN -->
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">    


</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <h1 class="text-center mb-4">Car Project - Login</h1>
                    <p class="text-center text-danger">
                        <?php if (isset($error)) echo $error; ?>
                    </p>
                    <form method="post">
                        <div class="mb-3">
                            <label for="txtemail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="txtpassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Enter your password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="btnsubmit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <p>Don't have an account? <a href="signup.php">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
