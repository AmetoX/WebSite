<?php
  require("PhpPages/session_ini.php");
  $_SESSION['current_page'] = 'lab6.php';
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
                      <input type="submit" value="Log in">
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
                      <input type="submit" value="Log in">
                    </form>
                    <button id="closeSignupBtn">Close</button>
                  </div>
                </section>
            </li>
        </ul>
    </div>
</nav>

<div class="container" >
  <div class="row">
    <div class="col-sm-4">
      <h2>About</h2>
      <form method="post" action="PhpPages/save.php">

        <textarea 
        <?php
          if(!$userLoggedIn){
            echo'disabled ';           
          }             
        ?> style="width: 100%; height: 200px; background-color: transparent; border:0; color:black; tex"  id="editableParagraph" contenteditable="true" name="editableParagraph" ><?php
        $idlocaltext = 1;
        include "PhpPages/getFromDB.php"; //o data per pagina..cred
        echo getContentFromDatabase($idlocaltext)//get text from the database ;
        ?></textarea> 

        <input type="text" id="id" name="id" hidden value="<?php echo $idlocaltext; // get id //o functie de php sa imi dea id-ul de la comment ?>">
        <?php
          if($userLoggedIn){
            echo'<button>Save</button>';           
          }            
        ?>
        
      </form>     
      
    </div>
	

  <?php
        $sql = "SELECT * FROM card";

        // Execute the query
        $result = $conn->query($sql);

        // Array to store the retrieved data
        $galerii = [];

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Loop through each row and store the data in an array
            while ($row = $result->fetch_assoc()) {
                $card = [
                    'id' => $row["id"],
                    'Title' => $row["titlu"],
                    'Title_description' => $row["descriere_titlu"],
                    'gallery_image' => $row["link_imagine"],
                    'detailed_description' => $row["descriere"]
                ];

                // Add the card to the array
                $galerii[] = $card;
            }
        } 
  ?>
	<div class="col-sm-8">
		<?php
			$content="";
			foreach ($galerii as $key => $value){
        $idlocaltext = $value['id'];
        $content.="<h2>".$value["Title"]."</h2>";
        $content.="<h5>".$value["Title_description"]."</h5>";
        $content.="<div class=\"fakeimg\"><img src=\"".$value["gallery_image"]."\"></img></div>";
        if($userLoggedIn && $_SESSION['role'] === "admin"){
          $content .='
          <form method="post" action="PhpPages/save2.php">
          <textarea style="width: 100%; height: 200px; background-color: transparent; border:0; color:black; font-size: 20px; "  id="editableParagraph" contenteditable="true" name="editableParagraph" >'.$value["detailed_description"].'</textarea>   
          <input type="text" id="id" name="id" hidden value="'.$idlocaltext.'">
          <button>Save</button>      
          </form>';
        }else{
          $content.="<h5>".$value["detailed_description"]."</h5>";
        }
        $content.='<br>';
			}
			echo $content;
		?>
	  </div>
  </div>
</div>

<div class="footer">
All rights reserved. &copy; Company NAILS101 2023.
</div>
<script src="script.js"></script>  

</body>
</html>