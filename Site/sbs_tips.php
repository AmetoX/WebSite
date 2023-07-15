<?php
  require("PhpPages/session_ini.php");
  $_SESSION['current_page'] = 'sbs_tips.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NAILS101</title>
  <?php require "bootstrap.inc" ?>
  <link rel="stylesheet" href="styles.css">
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

<h1>Steps For Nails Made With Tips:</h1>
<h2>1. Nail Prep </h2>
	<?php $galerii = array(
		array("Title" => "2. Choose The Nail Tips", "Title_description" => "  The trick with fitting the nail tip is that you need to make sure it fits from sidewall to sidewall.  Check if all ten fingernails has a fitting nail tip. ", "gallery_iamge" => "images/nailtips.jpg" ),
		array("Title" => "3. Apply The Nail Tips", "Title_description" => "Use a brush to place the bead on the inner side of the nail tip, move it gently on the length of the nail. Apply a thin layer, if you put too much then it's going to overflow. You can also use Nail Glue for this step.
        After preparing the nail tip gently apply the nail tip to 2/3 of the nail, do not do it all the way to the cuticle. 
        Then cure in an LED/UV lamp for 60-120 sec. ", "gallery_iamge" => "images/apply_tips.jpg" ),
        array("Title" => "4. Apply Gel On The Nail Tips", "Title_description" => "Take a bead of gel and apply it on top of the nail tip and lightly pillow the bead as close to the cuticle area without actually touching it.
        Then, gently bring it down to the tip and cure the nails in the LED/UV lamp again. After the gel is set, take a lint free wipe dipped in alcohol and wipe the nails on the top and bottom to remove the stiky part.", "gallery_iamge" => "images/gel_ontips.jpg" ),
        array("Title" => "5. Shape And Buff", "Title_description" => " Buff the surface. Then shape the nail as you like. When you're happy with the form you achieved, you should brush the dust off your nails and hand. After that take a lint free wipe dipped in alcohol and wipe the nails to make sure there's no dust remaining on the nail. ", "gallery_iamge" => "images/nail_shapes.jpg" ),
        array("Title" => "6. Color And Top Coat", "Title_description" => "  Choose a color you want, after applying it, cure the nails in the LED/UV lamp 60 seconds. You may need more than 1 coat. Then pick your top coat, apply it and cure it in the LED/UV lamp for 60-120 seconds.", "gallery_iamge" => "images/topcoat.jpg" ),
        array("Title" => "7. Cuticle Oil", "Title_description" => " Apply the cuticle oil on the cuticles and then massage it until it gets in your skin.", "gallery_iamge" => "images/cuticle_oil.jpg" ),
	);
	?>
	<div class="col-sm-8">
		<?php
			$content="";
			foreach ($galerii as $key => $value){
				$content.="<h2>".$value["Title"]."</h2>";
				$content.="<h5>".$value["Title_description"]."</h5>";
				$content.="<div class=\"fakeimg\"><img src=\"".$value["gallery_iamge"]."\"></img></div>";
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