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
      <img src="nailprep.jpg" alt="Nail Prep" width="1100" height="200">
    </div>
    <div class="carousel-item">
      <img src="polygel.jpg" alt="Polygel" width="1100" height="200">
    </div>
    <div class="carousel-item">
      <img src="forms.jpg" alt="Forms" width="1100" height="200">
    </div>
    <div class="carousel-item">
      <img src="tips.jpg" alt="Tips" width="1100" height="200">
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

	<h1>Steps for Nail Prep:</h1>
	<?php $galerii = array(
		array("Title" => "1. Cuticles", "Title_description" => "Start with your cuticles. They are often forgotten, but taking care of your cuticles will help your manicure stay on more firmly and gives you good access to your entire nail bed. Start with a Cuticle Remover, wait for a couple of minutes, then use a Cuticle Pusher or the Prep & Remove Pusher to gently push back your cuticles. Do this with the flat side. Then, gently go under the cuticle with the pointed side to remove dead skin cells or cut the dead skin with the Cuticle Nippers for a cleaner look. This will provide more surface area to paint your nails and allow you to get closer to your skin. That way, it won't look like you have any outgrowth. You also avoid painting over the cuticle and lifting the Gel Polish, which makes it come off faster.", "gallery_iamge" => "cuticles.jpg" ),
		array("Title" => "2. Shape and Buff", "Title_description" => " Choose the nail shape that suits you and file your nails into that shape. Whether that is rounded or more square, it is important to file from the side of your nail towards the center each time. This is the best way for your nail to maintain its strength. Next you want to buff your nails with a fine Buffer. Having a smooth surface on your nails may give the polish more opportunity to lift. Having a buffed nail gives your nail bed texture and grit and something for the polish to adhere to. Be careful not to over buff. Your nails are very thin and delicate and filing the natural nail too much may cause damage.", "gallery_iamge" => "buffing.jpg" ),
		array("Title" => "3. Cleanse", "Title_description" => "One of the main reasons your mani might lift is if there is any dirt or oil on your nail bed. Remember not all dirt and oil is visible!
        Be careful if you have applied cuticle remover or washed your hands with soap and water before your manicure, as this can all cause residual oils to be left on the nail plate. You want to cleanse your nails of this dirt and oil. This will ensure that they are grease-free and there is no residual dirt or dead skin cells. The best way to do this is to take some solution called Cleanser on a Lint Free Wipe and wipe it over your nails.", "gallery_iamge" => "cleansing.jpg" ),
        array("Title" => "4. Nail Dehydrator", "Title_description" => "Apply a very thin layer of Nail Dehydrator. Make sure not to touch the cuticles, but be sure to apply it to the top (free edge) of your nail. Let it Air Dry for 30-60 seconds. Works to remove or clean any nail dust, natural oil or fat and some other bateria on your natural nail plate, so that the nail gel bonds the nail surface better and stronger.", "gallery_iamge" => "dehydrator.jpg" ),
        array("Title" => "5. Primer", "Title_description" => "Apply a very thin layer of Primer. Make sure not to touch the cuticles, but be sure to apply it to the top (free edge) of your nail. Let it Air Dry for 30-60 seconds. Primers will remove any remaining oils and grease on the nail plate, which can otherwise lead to your base coat not adhering to the nail. It also prevents the creation of any air bubbles for better adherence. ", "gallery_iamge" => "primer.jpg" ),
        array("Title" => "6. Base Coat", "Title_description" => " Apply one layer of Base Coat. Make sure not to touch the cuticles, but be sure to apply it to the top (free edge) of your nail. Cure it in the UV lamp for 60 seconds. The Base Coat is the base layer for your Gel manicure. This product attaches itself well to the nail. It acts like double sided sticky tape that bonds to your nail plate and allows a tacky layer to bond the gel polish layers to until the topcoat. In addition, the Base Coat ensures that your nails do not discolour, peel, or lift easily, in other words, your nails are protected. It ensures a nice even nail, so the products stay in place.", "gallery_iamge" => "basecoat.jpg" ),
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