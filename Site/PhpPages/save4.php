<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['editableParagraph'])) {
    $content = $_POST['editableParagraph'];

    // Connect to the database
    require("db_inc.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $paragraphId = $_POST['id'];   
    $stmt = $conn->prepare("SELECT COUNT(*) as count FROM card3 WHERE ID = ?");
    $stmt->bind_param("i", $paragraphId);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = $row["count"];
    $stmt->close();
    if($count <= 0){
      $stmt = $conn->prepare("INSERT INTO card3 SET descriere = ?");
      if (!$stmt) {
          die("Error preparing statement: " . $conn->error);
      }
      $stmt->bind_param("s", $content);
    }else{
      $stmt = $conn->prepare("UPDATE card3 SET descriere = ? WHERE id = ?");
      if (!$stmt) {
          die("Error preparing statement: " . $conn->error);
      }

      $stmt->bind_param("si", $content, $paragraphId);
      //$_POST['id']; // Set the appropriate paragraph ID here
    }
    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();

    header('Location: ../lab6.php');
  } else {
    echo "Error: 'content' parameter is missing in the request";
  }
} else {
  echo "Error: Invalid request method";
}
?>
