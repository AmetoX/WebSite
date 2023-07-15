<?php
  session_start();
  $userLoggedIn = false;
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      $userLoggedIn = true;
  } 
  require("PhpPages/db_inc.php");
?>