<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

<link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">

http://localhost/php-pratice/college-project/welcome.php



<?php
include 'partials/_dbconnect.php'; // Include the shared connection file

// If the code reaches here, the connection is successful
echo "<h1>Database Connection Successful</h1>";
echo "<p>Connected to the database 'users' on port 3309.</p>";

// Close connection
mysqli_close($conn);
?>
