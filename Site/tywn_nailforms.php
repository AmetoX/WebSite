<?php session_start();
 $_SESSION['user']='Admin';
 $_SESSION['user_image']='user_image.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NAILS101</title>
  <?php require "bootstrap.inc" ?>
  <link rel="stylesheet" href="tywn_style.css">
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
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
				<?php 
					echo isset($_SESSION['user'])? $_SESSION['user'] : 'User';
				?>
				</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reports</a>
                    <a href="<?php echo isset($_SESSION['user']) ? 'settings.php' : 'signin.php'; ?>" class="dropdown-item">
						<?php
							echo isset($_SESSION['user']) ? 'Settings' : 'Sign in';		
						?>
					</a>
                    <div class="dropdown-divider"></div>
                    <a href="#"class="dropdown-item">
						<?php 
							echo isset($_SESSION['user'])? 'Logout' : 'Login';
						?>
					</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container" >
<h1>Things you will need for Nails made with Forms:</h1>
 <h2>1. UV Lamp</h2> 
 <h2>2. Nail Forms</h2> 
 <h2>3. Hard Gel</h2> 
 <h2>4. Slip Solution/Cleanser/Alcohol</h2> 
 <h2>5. Gel Brush</h2> 
 <h2>6. Nail Files</h2>
 <h2>7. Dust Brush</h2>
 <h2>8. Lint Free Wipes</h2> 
 <h2>9. Gel Polish</h2> 
 <h2>10. Top Coat</h2>  
 <h2>11. Cuticle Oil</h2>  
 <img src="images/tywn_nailforms.jpg" alt="Nail Forms" width="700" height="500">  
</div>

<div class="footer">
All rights reserved. &copy; Company NAILS101 2023.
</div>
<?php session_destroy(); ?>
</body>
</html>