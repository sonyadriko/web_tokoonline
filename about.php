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
							<a href="#" class="nav-opener text-center hidden visible-sm visible-xs"><i class="fa fa-bars"></i></a>
							<!-- nav of the page -->
							<nav id="nav">
								<ul class="list-unstyled">
									<li >
										<a href="index.php">Home</a>
									</li>
									<li class="active"><a href="about.php">About Us</a></li>
									<li><a href="contact.php">Contact Us</a></li>
								</ul>
							</nav>
							<!-- <a href="submit-coupon.html" class="btn-primary text-center text-uppercase">Submit Coupon</a> -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header of the page end -->
		<!-- main of the page -->
		<main id="main">
			<section class="abt-sec container pad-top-lg pad-bottom-lg">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="img-holder">
							<img src="style/images/Awal1.jpg" alt="image description" class="img-responsive">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="abt-txt">
							<strong class="title text-uppercase">Siapakah Kami??</strong>
							<h3 class="heading">Tentang Aplikasi Kami</h3>
							<p>Batama adalah aplikasi yang memfasilitasi antara penjual dan pembeli agar merasa aman saat bertransaksi.</p>
							<p>Batama digunakan oleh pengguna di seluruh wilayah bratang surabaya
								kami berkomitmen untuk memudahkan pengguna dengan sistem 100% free ongkos kirim
								dan juga produk yang dibeli diantar penjual secara langsung sehingga anda tidak perlu merasa khawatir saat bertransaksi dengan batama
								mari bergabung bersama kami di batama.</p>
							<a href="contact2.html" class="btn-primary text-center text-uppercase md-round">Contact Us</a>
						</div>
					</div>
				</div>
			</section>
			<!-- service sec of the page -->
			<section class="service-sec style2 container pad-bottom-md">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- service of the page -->
						<div class="service mar-bottom-xs">
							<span class="icon"><i class="icon-responsive"></i></span>
							<h3 class="heading5">Free Mobile App</h3>
							<p>Dapat digunakan melalui handphone android secara gratis.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- service of the page -->
						<div class="service mar-bottom-xs">
							<span class="icon"><i class="icon-reload"></i></span>
							<h3 class="heading5">100% Cashback</h3>
							<p>Terdapat banyak keuntungan seperti grtais ongkir sampai 0 rupiah.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- service of the page -->
						<div class="service mar-bottom-xs">
							<span class="icon"><i class="icon-comments"></i></span>
							<h3 class="heading5">Kegunaan Aplikasi</h3>
							<p>Aplikasi ini memiliki digunakan untuk penjualan dibratang.</p>
						</div>
					</div>
				</div>
			</section>
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