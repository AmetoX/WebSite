<?php  
    $servername = "localhost:3307";
    $username = "amt";
    $password = "1234D"; 
    $dbname = "firstweb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected to the database ' $dbname ' successfully !";
?>