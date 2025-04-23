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
  </head>
  <body>
		<header>
			<nav class="top-left-navigation">
				<a href=".">
					<img src="img/rcm-logo.jpg" alt="RCM Logo">
				</a>
			</nav>
			<div class="top-right-navigation">
				<nav>
				<ul>
					<li><a href="services.php" class="<?= $currentPage == 'services.php' ? 'active' : '' ?>">Services</a></li>
					<li><a href="projects.php" class="<?= $currentPage == 'projects.php' ? 'active' : '' ?>">Projects</a></li>
					<li><a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About</a></li>
					<li><a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
				</ul>
				</nav>
			</div>
		</header>
			<div class="title">
				<h1>RCM Metal Works</h1>
			</div>
			
			<div class="main-container">
				<img src="img/rcm-flower.jpeg" alt="RCM Homepage Image">
				<div class="text-content">
					<h2>Heading</h2>
					<h3>Subheading</h3>
					<p>Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate Content. Qui  international first-class nulla ut. Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki excepteur Basset hound. Zürich sleepy perfect consectetur.</p>
				</div>
			</div>
			<div class="reviews-container">
				<h2>Heading</h2>
				<h3>Subheading</h3>
				<div class="reviews-grid">
					<div class="review-box">"Quote"1</div>
					<div class="review-box">"Quote"2</div>
					<div class="review-box">"Quote"3</div>
					<div class="review-box">"Quote"4</div>
					<div class="review-box">"Quote"5</div>
					<div class="review-box">"Quote"6</div>
				</div>
			</div>
		
		<footer>
			<p><strong><a href="contact.php">Contact</a></strong></p>
			<br>
			<p>4131 S 420 W, Murray, UT 84123</p>
			<p>(801) 505-3369</p>
			<p>erinmcreavy@gmail.com</p>
			<br>
			<p><strong>Licensed and Insured</strong></p>
			<div class="social-icons">
				<a href="https://www.instagram.com/rcm_metal_works/" class="social-icons"><img src="img/instagram-logo.png" alt="instagram-link"></a>
				<a href="https://www.facebook.com/RCMMetalWorks/" class="social-icons"><img src="img/facebook-logo.png" alt="facebook-link"></a>
			</div>
		</footer>
  </body>
</html>