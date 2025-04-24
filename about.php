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
			<h1>About Us</h1>
		</div>
		
		<div class="main-container-about">
				<img src="img/rcm-owners.jpeg" alt="RCM Owners">
				<div class="text-content-about">
					<h2>Heading</h2>
					<h3>Subheading</h3>
					<p>Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate Content. Qui  international first-class nulla ut. Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki excepteur Basset hound. Zürich sleepy perfect consectetur.</p>
				</div>
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