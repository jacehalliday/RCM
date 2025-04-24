<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$statusMsg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'jacehalliday@yahoo.com';
    $subject = 'New Contact Form Submission';
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Message: " . $_POST['message'];

    $headers = 'From: ' . $_POST['email'];

    if (mail($to, $subject, $message, $headers)) {
        $statusMsg = '<p class="success">Your message has been sent successfully!</p>';
    } else {
        $statusMsg = '<p class="error">Sorry, something went wrong. Please try again later.</p>';
    }
}
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
				<h1>Contact</h1>
			</div>
			<div class="form-container">
			<?php if (!empty($statusMsg)) echo $statusMsg; ?>
				<form method="POST" action="">
					<label>Name
						<input type="text" name="name" required placeholder="Enter Your Name">
					</label>
					<label>Email
						<input type="email" name="email" required placeholder="example@email.com">
					</label>
					<label>Message
						<textarea name="message" required placeholder="Enter Your Comments"></textarea>
					</label>
					<button type="submit">Send</button>
				</form>
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