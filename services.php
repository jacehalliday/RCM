<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCM Metal Works</title>
    <link rel="stylesheet" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Press+Start+2P&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  </head>
  <body>
	<div class="page-wrapper">
		<header>
			<nav class="top-left-navigation">
				<a href=".">
					<img src="img/rcm-logo.jpg" alt="RCM Logo">
				</a>
			</nav>
			<div class="top-right-navigation">
				<nav>
					<ul>
					<li><a href="services.php" class="<?= $currentPage == 'services.php' ? 'active' : '' ?>"><strong>SERVICES</strong></a></li>
					<li><a href="projects.php" class="<?= $currentPage == 'projects.php' ? 'active' : '' ?>"><strong>PROJECTS</strong></a></li>
					<li><a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>"><strong>ABOUT</strong></a></li>
					<li><a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>"><strong>CONTACT</strong></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="centered-h1">
			<h1>Indoor Services</h1>
		</div>
		<div class="main-container-service">
				<img src="img/rcm-railing.jpeg" alt="RCM Owners">
				<div class="text-content-service">
					<h2>Railing</h2>
					<p>One of our many specialties for indoor services includes railing. We measure and fit the railing to your space and can create any design to fit your vibe whether it’s sleek and modern or funky maximalist! We always ensure that all railing we build is up to code.</p>
				</div>
		</div>
		
		<div class="main-container-service">
				<div class="text-content-service">
					<h2>Fireplace Wraps</h2>
					<p>Looking for something unique to add to your living space? Try a steel fireplace wrap! We can fit any shape and offer a wide range of colors in powder coat or our unique patina options! Elevate your living room with a statement fireplace.</p>
				</div>
				<img src="img/rcm-fireplace.jpeg" alt="RCM Owners">
		</div>
		
		<div class="main-container-service">
				<img src="img/rcm-design2.jpeg" alt="RCM Owners">
				<div class="text-content-service">
					<h2>Custom Designs</h2>
					<p>We love making your dreams and ideas come to life! Make your space your own with unique details and designs that you can’t get anywhere else. Custom built to fit your home and lifestyle and made to match your vibe, we love to design unique projects.</p>
				</div>
		</div>
		
		<div id="outdoor-section">
			<div class="centered-h1">
				<h1>Outdoor Services</h1>
			</div>
		</div>
		
		<div class="main-container-service">
				<div class="text-content-service">
					<h2>Residential Yards</h2>
					<p>Make your outdoor living space your own with custom built landscaping features like garden boxes or retaining walls. Our garden boxes are great for adding depth to your yard and providing optimal space for growing any plants from flowers to vegetables! If you just want to add a subtle charm to the layout of your yard then contact us about a retaining wall that is built to fit any space.</p>
				</div>
				<img src="img/rcm-flower2.jpeg" alt="RCM Owners">
		</div>
		<div class="main-container-service">
				<img src="img/rcm-mailbox.jpeg" alt="RCM Owners">
				<div class="text-content-service">
					<h2>Outdoor Features</h2>
					<p>In addition to landscaping projects we also provide custom built outdoor structures such as mailboxes, gates and fencing, and steel doors. We offer LED lighting options for outdoor features to help illuminate your yard at night. Stand out from your neighbors with a custom steel gate with your own designs or an elegant arch to elevate your outdoor living space.</p>
				</div>
		</div>
		<div class="main-container-service">
				<div class="text-content-service">
					<h2>Commercial Property</h2>
					<p>We offer projects for all kinds of properties. Whether it’s a garden box or railing for an office building, a gate for a restaurant, or retaining walls for the outdoor space at an apartment building we are happy to enhance the appearance of your businesses. Make sure to ask about plasma cutting your logo or company name for a business sign or even just to add a personalized touch to your — </p>
				</div>
				<img src="img/rcm-base.jpeg" alt="RCM Owners">
		</div>	
		</div>
		
		<footer class="site-footer">
			<div class="footer-content">
				<div class="footer-section contact-info">
					<a href="contact.php" class="contact-link"><strong>Contact</strong></a>
					<p>4131 S 420 W, Murray, UT 84123</p>
					<p>(801) 505-3369</p>
					<p><a href="mailto:erinmcreavy@gmail.com">erinmcreavy@gmail.com</a></p>
				</div>

				<div class="footer-section legal-social">
					<p><strong>Licensed and Insured</strong></p>
					<div class="social-icons">
						<a href="https://www.instagram.com/rcm_metal_works/" target="_blank">
							<img src="img/instagram-logo.png" alt="Instagram">
						</a>
						<a href="https://www.facebook.com/RCMMetalWorks/" target="_blank">
							<img src="img/facebook-logo.png" alt="Facebook">
						</a>
					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<p>RCM Metal Works, Est. 2021</p>
			</div>
		</footer>
  </body>
</html>