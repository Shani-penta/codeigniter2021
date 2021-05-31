<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Al Roumi | Home</title>
	<link rel="icon" href="<?= base_url(); ?>/public/assets/images/fav.png">
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;800&display=swap" rel="stylesheet">
	<!-- styles -->
	<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/animations.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/flexslider-min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/animate.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/scss/main-style.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body class="home-page">
	<div id="site-loader" class="load-complete">
		<div class="load-position">
			<img src="<?= base_url(); ?>/public/assets/images/loader.jpg" alt="loader">
		</div>
	</div>
	<!--header section-->
	
	<section class="header">
		<div class="container">
			<div class="row animatedParent " data-sequence="100">
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 logo">
					<a href="index.html">
						<img src="<?= base_url(); ?>/public/assets/images/new_logo.png" alt="logo">
					</a>
				</div>
				<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 menu">
					<h3 class="d-none">menu</h3>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 head_items">
						<div class="contact animated fadeInDownShort" data-id="1">
							<p><a href="#"><i class="fa fa-phone"
                                       aria-hidden="true"></i> +971 2 6729901</a>  <a href="mailto:artroumi@eim.ae"><i
                                       class="fa fa-envelope-o"
                                       aria-hidden="true"></i> artroumi@eim.ae</a> 
							</p>
						</div>
						<div class="mobile-menu">
							<a href="#/"> <span class="bar"></span>
								<span class="bar"></span>
								<span class="bar"></span>
							</a>
						</div>
					</div>
					<nav class="navbar navbar-expand-sm menu_main">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="collapsibleNavbar">
							<ul class="navbar-nav">
								<li class="nav-item active"> <a href="<?= base_url(); ?>">Home</a>
								</li>
								<li class="nav-item"> <a href="about.html">About Us</a>
								</li>
							
								<li class="nav-item"> <a href="<?= base_url(); ?>/contact">Contact Us</a>
								</li>
								<?php if(session()->has('logged_user')): ?>
								<li class="nav-item dropdown"> <a class="dropdown-menu" href="<?= base_url(); ?>/dashboard">Dashboard</a>
								</li>
								<li class="nav-item"> <a href="#">Edit</a>
								</li>
								<li class="nav-item"> <a href="#">Change password</a>
								</li>
								<li class="nav-item"> <a href="<?= base_url(); ?>/dashboard/logout">Logout</a>
								</li>
								<?php else: ?>
								<li class="nav-item"> <a href="<?= base_url(); ?>/register">Register</a>
								</li>
								<li class="nav-item"> <a href="<?= base_url(); ?>/login">Login</a>
								</li>
								<?php endif; ?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="mobile-nav">
		<h2 style="display: none;"> Al Roumi</h2>
		<nav class="navbar navbar-expand-sm menu_main-mobile">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar2">
				<ul class="navbar-nav">
					<li class="nav-item active"> <a href="index.html">Home</a>
					</li>
					<li class="nav-item"> <a href="about.html">About Us</a>
					</li>
					
					<li class="nav-item"> <a href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
	</section>
	<!--header section ends-->
<?= $this->renderSection("content"); ?>

	<!--footer section-->
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-4 foot-out first animatedParent" data-sequence='500'>
					<div class="foot-menu foot-mid animated fadeInUpShort" data-id='1'>
						<h4>Quick Links</h4>
						<ul>
							<li><a href="about.html"> About Us</a>
							</li>
							<li> <a href="principle-companies.html">Principle Companies</a>
							</li>
							<li> <a href="airloop-system-services.html">Airloop Systems</a>
							</li>
							<li> <a href="wireline-company.html">Wireline Company</a>
							</li>
							<li> <a href="clients.html">Clients</a>
							</li>
							<li> <a href="contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 foot-out second animatedParent">
					<div class="foot-mid animated fadeInUpShort">
						<h4>Locate Us</h4>
						<p><strong>Al Roumi General Trading</strong>
							<br>P.O Box : 45333 ,
							<br>Abu Dhabi , United Arab Emirates.
							<br>Phone : <a href="tel:+97126729901">+971 2 6729901</a>
							<br>Fax : +971 2 6729771
							<br>E - mail : <a href="mailto:artroumi@eim.ae">artroumi@eim.ae</a>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-4 foot-out last">
					<div class="foot-right animatedParent" data-sequence='500'>
						<iframe class="ifr animated fadeInUpShort" data-id='1' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.042476478942!2d54.3736603153716!3d24.4839850662718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e6646ef6634d9%3A0x4adf7ed776b5c562!2sAl%20Roumi%20General%20Trading!5e0!3m2!1sen!2sin!4v1584092311331!5m2!1sen!2sin"></iframe>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 foot-out-copy">
					<p class="copy-in">Copyright © 2020 Al Roumi General Trading.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?= base_url(); ?>/public/assets/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?= base_url(); ?>/public/assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>/public/assets/js/css3-animate-it.js"></script>
	<script src="<?= base_url(); ?>/public/assets/js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url(); ?>/public/assets/js/owl.carousel.js"></script>
	<script src="<?= base_url(); ?>/public/assets/js/jquery.matchHeight.js"></script>
	<script src="<?= base_url(); ?>/public/assets/js/custom.js"></script>
</body>

</html>