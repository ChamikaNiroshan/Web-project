<?php
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $databasename = "showtime_database";
    
    // CREATE CONNECTION
    $conn = mysqli_connect($servername,$username, $password, $databasename) or die(mysqli_error($conn));
    // GET CONNECTION ERRORS
    if ($conn->connect_error) {
        die("Connection failed: " . $connect_error);
    }
?>