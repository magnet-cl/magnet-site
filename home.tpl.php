<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Magnet.cl</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body>
		<!-- Navigation -->
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">Magnet</a>
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<!--<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>-->
					</ul>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="stripe">
			<div class="container content">
				<div class="hero-unit" id="hero1">
					<h1>Backend</h1>
					<div class="row">
						<div class="span3">
							We are proficient in Ruby, Python, Java, C++, PHP and more!
						</div>
						<div class="span9">
							<img src="img/java.png">
							<img src="img/python.png">
							<img src="img/django.png">
						</div>
					</div>
				</div>
				<div class="hero-unit" id="hero2">
					<h1>Mobile</h1>
					<div class="row">
						<div class="span3">
							We have experience in mobile applications, from design and development to publishing on the App Store and Google Play.
						</div>
						<div class="span9">
							<img src="img/ios.png">
							<img src="img/android.png">
						</div>
					</div>
				</div>
				<div class="hero-unit" id="hero3">
					<h1>Frontend</h1>
					<div class="row">
						<div class="span3">
							We know a lot about the latest web technologies: HTML5, CSS3, Javascript, Coffeescript.
						</div>
						<div class="span9">
							<img src="img/bootstrap.png">
							<img src="img/html5.png">
							<img src="img/coffeescript.png">
						</div>
					</div>
				</div>

			</div> <!-- /container -->
		</div>

		<div class="container">
			<div class="row">
				<div class="span6">
					<h2>About Us</h2>
					We are a group of kick-ass engineers looking for some interesting, challenging and/or innovative work after recently closing our startup. We have been coding together for a year now, after having worked and learned at Denmark, Germany, US and of course Chile.
				</div>
				<div class="span6">
					<h2>Contact Us</h2>
					We develop using agile methologies in order to iterate as fast as possible. So, if you are in need of ninjas, to do some hacking contact us <a href="#contactForm" class="btn" data-toggle="modal">HERE.</a>
				</div>
			</div>
			<hr>
			<footer>
				<p>&copy;<a href="http://magnet.cl">magnet.cl</a> 2012 -- Also, we like <a href="http://www.youtube.com/watch?v=CMNry4PE93Y" target="_blank">turtles</a></p>
			</footer>
		</div> <!-- /container -->

		<div class="modal hide fade" id="contactForm">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">×</button>
				<h3>Contact Us</h3>
			</div>
			<div class="modal-body">
				<p><input type="text" id="name" name="name" placeholder="Your name"></p>
				<p><input type="email" id="email" name="email" placeholder="Your e-mail"></p>
				<p><textarea tname="comment" id="message" placeholder="Hi, ..."></textarea></p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" id="submit" class="btn btn-primary">Submit</a>
			</div>
		</div>
		
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>