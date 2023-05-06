<?php session_start();
 $_SESSION['user']='Admin';
 $_SESSION['user_image']='user_image.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NAILS101</title>
  <?php require "bootstrap.inc" ?>
  <link rel="stylesheet" href="styles.css">
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
    <a href="#lab6.php" class="navbar-brand">NAILS101</a>
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

<h1>Steps For Nails Made With Forms:</h1>
<h2>1. Nail Prep </h2>
	<?php $galerii = array(
		array("Title" => "2. Nail Forms", "Title_description" => " Place the Nail Form by inserting your finger and wrapping them behind the free end of your nail, then stick both corners together. 
        Another trick you can do is attach the bottom corners together and then put them on the finger. Look at it from the side so you know it's straight and not angled up or down. Pinch the tip of the Nail Form depending on what shape and length you're going for.", "gallery_iamge" => "images/nailforms.jpg" ),
		array("Title" => "3. Apply Gel On The Nail Forms", "Title_description" => " Now that the application part is over, it's time for you to be creative by applying your chosen medium ( acrylic, builder gel, and sculpture gel) onto your nails, using the vertical lines to guide the length and horizontal lines to guide the width.", "gallery_iamge" => "images/formswith_gel.jpg" ),
        array("Title" => "4. Cure And Remove", "Title_description" => "Cure your nails once you're done applying your chosen medium; make sure that you're fully curing both sides of your nails with an UV/LED nail lamp. Once completely cured, remove the Nail Forms and cure the underside of your nails.
        Curing Time: LED (30 seconds), UV/LED (60-90 seconds), UV (2 minutes) depending on lamp wattage. After the gel is set, take a lint free wipe dipped in alcohol and wipe the nails on the top and bottom to remove the stiky part.", "gallery_iamge" => "remove_forms.jpg" ),
        array("Title" => "5. Shape And Buff", "Title_description" => " Buff the surface. Then shape the nail as you like. When you're happy with the form you achieved, you should brush the dust off your nails and hand. After that take a lint free wipe dipped in alcohol and wipe the nails to make sure there's no dust remaining on the nail. ", "gallery_iamge" => "images/nail_shapes.jpg" ),
        array("Title" => "6. Color And Top Coat", "Title_description" => "  Choose a color you want, after applying it, cure the nails in the LED/UV lamp 60 seconds. You may need more than 1 coat. Then pick your top coat, apply it and cure it in the LED/UV lamp for 60-120 seconds.", "gallery_iamge" => "images/topcoat.jpg" ),
        array("Title" => "7. Cuticle Oil", "Title_description" => " Apply the cuticle oil on the cuticles and then massage it until it gets in your skin.", "gallery_iamge" => "cuticle_oil.jpg" ),
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
<?php session_destroy(); ?>
</body>
</html>