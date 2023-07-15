<?php
    session_start();
    // Get the form data
    $s_username = $_POST['newUsername'];
    $s_password = $_POST['newPassword'];
    //$s_access = "user";

    // Validate the form data
    if (empty($s_username) || empty($s_password)) {
        // Handle error
        die("Username and password are required");
    }

    // Connect to the database
    require("db_inc.php");

    // Hash the password
    $hashedPassword = password_hash($s_password, PASSWORD_DEFAULT);

    // Insert the user data into the database
    $sql = "INSERT INTO users (username, password, role) VALUES ('$s_username', '$hashedPassword', 'user')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../lab6.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
