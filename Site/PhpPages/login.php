<?php
session_start();

// Get the form data
$l_username = $_POST['logusername'];
$l_password = $_POST['logpassword'];

// Validate the form data
if (empty($l_username) || empty($l_password)) {
    // Handle error
    die("Username and password are required");
}

// Connect to the database
require("db_inc.php");

// Prepare a statement to query the database
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $l_username);
$stmt->execute();
$result = $stmt->get_result();

// Check if a row with the given username exists
if ($result->num_rows > 0) {
    // Fetch the row from the result set
    $row = $result->fetch_assoc();
    
    // Verify the password
    if (password_verify($l_password, $row['password'])) {
        // Password is correct       
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $_POST['logusername'];
        $_SESSION['role'] = $row['role'];
        //$_SESSION['rol'] = $row['rol']; cauta exact numele coloanei
        header("Location: ../".$_SESSION['current_page']);
    } else {
        // Password is incorrect        
        echo '<script type= "text/javascript">alert("Invalid pass"); window.location.href="../FirstWebSite.php";</script>';            
    }
} else {
    // No user with the given username exists   
    echo '<script type= "text/javascript">alert("Invalid username"); window.location.href="../FirstWebSite.php";</script>';
}

$stmt->close();
$conn->close();
?>
