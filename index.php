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
		
			<div class="title">
				<h1>RCM Metal Works</h1>
			</div>
			
			<div class="main-container">
				<div class="text-content">
					
					<p>RCM metal works is a licensed and insured custom metal fabrication company that specializes in any custom steel projects such as railing, garden boxes, and fireplace wraps. Owned by a husband and wife team, we love making your ideas come to life! We offer powder coat color options or a wide variety of patina colors that we can do in shop. We can also use our plasma cutter for any designs or details to add a personal charm to your projects. We have done many jobs for both residential and business properties and often do work for both new-build houses and home remodels. Our shop is located in the heart of Salt Lake City in Murray, Utah.</p>
				</div>
			</div>
			
			<div class="home-section">
			<a href="services.php" class="home-card-link">
				<div class="home-card">
					<div class="card-image" style="background-image: url('img/rcm-railing4.JPG');"></div>
					<div class="card-content">
						<h1 class="main-card-header1">Indoor Services</h1>
						
						<p>Check out some of our indoor projects that we can do for you!</p>
						<img src="img/arrow.png" alt="Arrow" class="arrow">
					</div>
				</div>
			</a>
			
			<a href="services.php#outdoor-section" class="home-card-link">
				<div class="home-card">
					<div class="card-image" style="background-image: url('img/rcm-flower2.jpeg');"></div>
					<div class="card-content">
						<h1 class="main-card-header2">Outdoor Services</h1>
						<p>Check out some of our outdoor projects that we can do for you!</p>
						<img src="img/arrow.png" alt="Arrow" class="arrow">
					</div>
				</div>
			</a>
			
			<a href="projects.php" class="home-card-link">
				<div class="home-card">
					<div class="card-image" style="background-image: url('img/rcm-design.jpeg');"></div>
					<div class="card-content">
						<h1 class="main-card-header3">Projects</h1>
						<p>Check out some of our wide variety of projects and see if we can help in any way!</p>
						<img src="img/arrow.png" alt="Arrow" class="arrow">
					</div>
				</div>
			</a>
			</div>
			
			
			
		<!-- review container when reviews are ready
		
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
		-->
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