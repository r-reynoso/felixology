<?php

    // Database conection configuration
    /* $servername = "	mysqlcluster11";
    $username = "rayaera";
    $password = "Maricela1765";
    $database = "registracion"; */
    
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