<?php
    // Hardcode our database credentials.
    //
    // FIXME: Environment variables might be a
    // better way of storing these.
    $host = "localhost";
    $user = "root";
    $password = "PASSWORD";
    $database = "DATABASE";
    
    // Launch new connection.
    $conn = new mysqli($host, $user, $password, $database);
    
    // Exit fatally if a database connection could not be established.
    if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>