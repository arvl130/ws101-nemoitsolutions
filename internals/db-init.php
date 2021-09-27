<?php
    // Get database credentials from environment.
    $host = getenv('DB_HOST') ?: "localhost";
    $user = getenv('DB_USER') ?: "root";
    $database = getenv('DB_NAME') ?: "itcompany_db";
    $password = getenv('DB_PASS'); // allow empty passwords

    // Launch new connection.
    $conn = new mysqli($host, $user, $password, $database);
    
    // Exit fatally if a database connection could not be established.
    if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
