<?php include'structure.php'; ?>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header">
			<!-- header top of the page -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<span class="txt">Welcome to Batama Marketplace</span>
							<ul class="align-left list-unstyled">
								<!-- <li><a href="#">Support</a></li> -->
								<li><a href="login.php"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<!-- <li><a href="register.html"><i class="fa fa-user"></i> Register</a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-holder">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="#" class="nav-opener text-center hidden visible-sm"><i class="fa fa-bars"></i></a>
							<!-- nav of the page -->
							<nav id="nav">
								<ul class="list-unstyled">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li><a href="about.php">About Us</a></li>
									<li class="active">
										<a href="contact.php">Contact Us</a>
									</li>
								</ul>
							</nav>
							<!-- <a href="submit-coupon.html" class="btn-primary hidden-xs text-center text-uppercase">Submit Coupon</a> -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header of the page end -->
		<!-- main of the page -->
		<main id="main">
			<!-- banner of the page -->
			<!-- <section class="banner banner3 bg-full overlay" style="background-image: url(http://placehold.it/1920x320);"> -->
			<section class="banner banner3 bg-full overlay">
				<div class="holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center">
								<h1>Contact Us</h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- contact list of the page -->
			<ul class="list-unstyled contact-list2">
				<li>
					<span class="icon icon-location"></span>
					<div class="align-left">
						<strong class="title">Our Location</strong>
						<address>Bratang,<br> Surabaya, Indonesia</address>
					</div>
				</li>
				<li>
					<span class="icon icon-phone"></span>
					<div class="align-left">
						<strong class="title">Call Us</strong>
						<span class="tel"><a href="tel:081232123212">(+62) 812 3212 3212</a></span>
					</div>
				</li>
				<li>
					<span class="icon icon-email"></span>
					<div class="align-left">
						<strong class="title">Email Address</strong>
						<span class="mail"><a href="mailto:appbatama@gmail.com;">appbatama@gmail.com</a></span>
					</div>
				</li>
				<li>
					<span class="icon fa fa-headphones"></span>
					<div class="align-left">
						<strong class="title">Supporting Time</strong>
						<span class="txt">24 Jam</span>
					</div>
				</li>
			</ul>
		</main>
		<!-- main of the page end -->
		<!-- footer of the page -->
		<?php include'footer.php';?>
		<!-- footer of the page end -->
		<span id="back-top" class="text-center md-round fa fa-angle-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="style/images/svg/bars.svg" width="60" alt="loader"></div>
		</div>
	</div>
	<!-- main container of all the page elements end -->
	<!-- include jQuery -->
	<?php include 'script_js.php';?>
</body>
</html>