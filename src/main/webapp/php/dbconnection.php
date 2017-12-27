<?php

    // Database conection configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "registracion";
    
    // database connection error handeler
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn)
    {
        header('Location: /errorconn.html');
        exit;
    }

?>