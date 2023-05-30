<?php
  session_start();
  $userLoggedIn = false;
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      $userLoggedIn = true;
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NAILS101</title>
  <?php require "bootstrap.inc" ?>
  <link rel="stylesheet" type="text/css"  href="styles.css">
  <link rel="stylesheet" type="text/css" href="stylelog.css">
</head>
<body>

<div class="header">	
	<h1>NAILS101</h1>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="1" class="active"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/nailprep.jpg" alt="Nail Prep" width="1100" height="200">
    </div>
    <div class="carousel-item">
      <img src="images/polygel.jpg" alt="Polygel" width="1100" height="200">
    </div>
    <div class="carousel-item">
      <img src="images/forms.jpg" alt="Forms" width="1100" height="200">
    </div>
    <div class="carousel-item">
      <img src="images/tips.jpg" alt="Tips" width="1100" height="200">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="lab6.php" class="navbar-brand">NAILS101</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
             <a href="tywn_nailprep.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Nail Prep</a>
              <div class="dropdown-menu">
                    <a href="tywn_nailprep.php" class="dropdown-item">Things You Will Need</a>
                    <div class="dropdown-divider"></div>
                    <a href="sbs_nailprep.php"class="dropdown-item">Step By Step</a>
              </div>
            </li> 
            <li class="nav-item dropdown">
            <a href="tywn_polygel.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Polygel With Reusable Nail Tips</a>
            <div class="dropdown-menu">
                    <a href="tywn_polygel.php" class="dropdown-item">Things You Will Need</a>
                    <div class="dropdown-divider"></div>
                    <a href="sbs_polygel.php"class="dropdown-item">Step By Step</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="tywn_nailforms.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Nail Forms</a>
                <div class="dropdown-menu">
                <a href="tywn_nailforms.php" class="dropdown-item">Things You Will Need</a>
                    <div class="dropdown-divider"></div>
                    <a href="sbs_nailforms.php"class="dropdown-item">Step By Step</a>
                </div>
            </li>
            <li class="nav-item dropdown">
            <a href="tywn_tips.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Nail Tips</a>
            <div class="dropdown-menu">
            <a href="tywn_tips.php" class="dropdown-item">Things You Will Need</a>
                    <div class="dropdown-divider"></div>
                    <a href="sbs_tips.php"class="dropdown-item">Step By Step</a>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <!-- Prima sectiune -->
                  <section> 
                    <?php
                      if(!$userLoggedIn){
                        echo '<button id="loginBtn" class="loginButton">Log In</button>';
                      }else{
                        echo '<a href="PhpPages/logout.php">Logout</a>';
                      }
                    ?>
                  </section>
                    <!-- A 2a sectiune Log In Window -->
                <section>
                  <div id="loginBox">
                    <form method="post" action="PhpPages/login.php">
                      <h2>Login</h2>
                      <label for="username">Username:</label>
                      <input type="text" id="username" autocomplete="username" name="logusername">
                      <label for="password">Password:</label>
                      <input type="password" id="password" name="logpassword">
                      <input type="submit" value="Submit">
                    </form>
                    <button id="closeBtn">Close</button>
                    <button id="signupBtn">Sign Up</button>
                  </div>
                </section>

                <!-- A 3a sectiune Sign Up Window -->
                <section>
                <div id="signupBox" style="display: none;">
                    <form method="post" action="PhpPages/signup.php">
                      <h2>Sign Up</h2>
                      <label for="newUsername">Username:</label>
                      <input type="text" id="newUsername" name="newUsername" autocomplete="username">
                      <label for="newPassword">Password:</label>
                      <input type="password" id="newPassword" name="newPassword">
                      <input type="submit" value="Submit">
                    </form>
                    <button id="closeSignupBtn">Close</button>
                  </div>
                </section>
            </li>
        </ul>
    </div>
</nav>

<div class="container"  >
<form method="post" action="PhpPages/save.php">
  <textarea <?php
          if(!$userLoggedIn || $_SESSION['role'] !== "admin"){
            echo'disabled ';           
          }             
        ?>style="width: 100%;  background-color: transparent; border:0; color:black; text-align: center; font-size: 40px;" data-lang="1" id="editableParagraph" rows="12" contenteditable="true" name="editableParagraph" ><?php
  $idlocaltext = 3;
  include "PhpPages/getFromDB.php"; //o data per pagina..cred
  echo getContentFromDatabase($idlocaltext)//get text from the database ;
  ?></textarea> 
  <input type="text" id="id" name="id" hidden value="<?php echo $idlocaltext; // get id //o functie de php sa imi dea id-ul de la comment ?>">
        <?php
          if($userLoggedIn && $_SESSION['role'] == "admin"){
            echo'<button>Save</button>';           
          }             
        ?>
</form>
  <br>
 <img src="images/tywn_nailprep.jpg" alt="Nail Prep" width="700" height="600" d>  
</div>

<div class="footer">
All rights reserved. &copy; Company NAILS101 2023.
</div>
<script src="script.js"></script> 

</body>
</html>