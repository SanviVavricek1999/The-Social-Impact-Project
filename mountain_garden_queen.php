//index.php

<!DOCTYPE HTML>
<html>
	<head>
		<title>The Social Impact Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">The Social Impact Project</a></h1>
				<nav class="links">
					<ul>
						<li><a href="HOME.html">HOME</a></li>
						<li><a href="ABOUT.html">ABOUT</a></li>
						<li><a href="PROJECTS.html">PROJECTS</a></li>
						<li><a href="CONTACT.html">CONTACT</a></li>
					</ul>
				</nav>
				<nav class="main">
					<ul>
						<li class="search">
							<a class="fa-search" href="#search">Search</a>
							<form id="search" method="get" action="#">
								<input type="text" name="query" placeholder="Search" />
							</form>
						</li>
						<li class="menu">
							<a class="fa-bars" href="#menu">Menu</a>
						</li>
					</ul>
				</nav>
			</header>

		<!-- Menu -->
			<section id="menu">

				<!-- Search -->
					<section>
						<form class="search" method="get" action="#">
							<input type="text" name="query" placeholder="Search" />
						</form>
					</section>

				<!-- Links -->
					<section>
						<ul class="links">
							<li>
								<a href="HOME.html">
									<h3>HOME</h3>
									<p>Get to know us!</p>
								</a>
							</li>
							<li>
								<a href="ABOUT.html">
									<h3>ABOUT</h3>
									<p>Learn more about our mission!</p>
								</a>
							</li>
							<li>
								<a href="PROJECTS.html">
									<h3>PROJECTS</h3>
									<p>Check out our projects!</p>
								</a>
							</li>
							<li>
								<a href="CONTACT.html">
									<h3>CONTACT</h3>
									<p>Talk to us!</p>
								</a>
							</li>
						</ul>
					</section>

				<!-- Actions -->
					<section>
						<ul class="actions vertical">
							<li><a href="#" class="button big fit">Donate Today</a></li>
						</ul>
					</section>

			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Introduction</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
								<p>The Social Impact Project is a non-profit organization dedicated to making meaningful, long-term changes for communities and individuals in need. Our goal is to provide support for those who need it most and to create a more equitable and just society.</p>
								<p>We strive to make a difference in the lives of everyday people, and we are committed to helping our communities in meaningful ways. Through our projects, we aim to create sustainable change in a variety of areas, including education, health and wellness, economic development, and social equality.</p>
								<p>We are a passionate team of volunteers collaborating in a variety of ways to make the world a better place. Come join us in our mission!</p>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About Us</h2>
								<p>The Social Impact Project was created in 2020, and since then has been dedicated to creating meaningful, long-term changes in the lives of people in need. We are a non-profit organization comprised of passionate volunteers and professionals who are committed to creating a better future through service projects and initiatives.</p>
								<p>We believe that everyone should have access to the resources necessary to live a healthy, meaningful life. Our mission is to provide assistance to underserved communities, and to promote social justice and equality for all. Through our projects, we strive to create lasting change for individuals and their families.</p>
								<p>We are passionate about creating long-term, sustainable change. We believe in a world where everyone has an equal opportunity to live a fulfilling life free from poverty and oppression. We are committed to making this world a reality.</p>
							</article>

						<!-- Projects -->
							<article id="projects">
								<h2 class="major">Projects</h2>
								<p>At The Social Impact Project, we are always striving to make a meaningful, lasting impact on our communities. We have worked on various projects over the years, ranging from environmental cleanup initiatives to educational programs and economic development projects.</p>
								<p>Our current projects include:</p>
								<ul>
									<li>Environmental Cleanup Initiative</li>
									<li>Community Garden Project</li>
									<li>Sustainable Housing Initiative</li>
									<li>Youth Mentorship Program</li>
									<li>Community Literacy Program</li>
									<li>Food Security Initiative</li>
									<li>Technology Accessibility Program</li>
								</ul>
								<p>We are always looking for new partners to help us make an even bigger impact! If you are interested in joining us in our mission, please <a href="contact.html">contact us</a>.</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="contact.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="contact">
									<li class="fa-phone">+1 (123) 456-7890</li>
									<li class="fa-envelope"><a href="#">info@thesocialimpactproject.net</a></li>
									<li class="fa-home">123 Main Street<br />
									Vancouver, BC V6B 5L6 Canada</li>
								</ul>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; The Social Impact Project. All rights reserved.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>