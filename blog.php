<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRAVELICIOUS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="home.php">TRAVELICIOUS</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="home.php">Home</a></li>
								
								<li class="has-dropdown">
									<a href="tours.php">Tours</a>
									
								</li>
								<li><a href="hotels.php">Hotels</a></li>
								<li><a href="services.html">Services</a></li>
								<li class="active"><a href="blog.html">Blog</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/cover-img-2.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h2>by travelicious.com</h2>
										<h1>Blog</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-division">






							<?php
							


							$conn = new mysqli("localhost", "root", "", "tms");

							$sql = "select * from tblblog";
							$result = $conn->query($sql);


							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {



							?>




									<article class="animate-box">
										<div class="blog-img" style="background-image: url(images/<?php echo $row["blogimage"] ?>);"></div>
										<div class="desc">
											<div class="meta">
												<p>
													<span><?php echo $row["blogtime"] ?> </span>

													<span><a href="createblog.php"><?php echo $row["blogplace"] ?></a></span>
												</p>
											</div>
											<h2><a href="#"><?php echo $row["blogheading"] ?></a></h2>
											<p><?php echo $row["blogdetails"] ?></p>
										</div>
									</article>




							<?php
								}
							}
							?>





















						</div>
						<div class="row">
							<div class="col-md-12">
								<ul class="pagination">
									
									
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="sidebar-wrap">
							<div class="side animate-box">
								<h3 class="sidebar-heading">Recent Post</h3>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
										<div class="desc">
											<span class="date">Feb 24, 2018</span>
											<h3>Our Secret Island Boat Tour Is just for You</h3>
											<span class="cat">Tour</span>
										</div>
									</a>
								</div>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
										<div class="desc">
											<span class="date">Feb 24, 2018</span>
											<h3>How These 5 People Found The Path to Their Dream Trip</h3>
											<span class="cat">Hotel</span>
										</div>
									</a>
								</div>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
										<div class="desc">
											<span class="date">Feb 24, 2018</span>
											<h3>Our Secret Island Boat Tour Is just for You</h3>
											<span class="cat">Cruises</span>
										</div>
									</a>
								</div>
							</div>
							<div class="side animate-box">
								<div class="sidebar-heading">Categories</div>
								<ul class="category">
									<li><a href="#"><i class="icon-check"></i> Car rental<span>(2)</span></a></li>

									<li><a href="#"><i class="icon-check"></i> Activities<span>(3)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Hotel<span>(5)</span></a></li>

									<li><a href="#"><i class="icon-check"></i> Travel<span>(3)</span></a></li>

									<li><a href="#"><i class="icon-check"></i> Cruises<span>(2)</span></a></li>
								</ul>
							</div>

							<p><a href="createblog.php" class="btn btn-primary">Create New Blog</a></p>


						</div>
					</div>
				</div>
			</div>
		</div>
		
			
		<footer id="colorlib-footer" role="contentinfo">
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-6 colorlib-widget">
							<h4>Tour Agency</h4>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com//"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
							</p>
						</div>




						<div class="col-md-6 col-md-push-1">
							<h4>Contact Information</h4>
							<ul class="colorlib-footer-links">
								<li>Townhall 123, <br> Asad gate </li>
								<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
								<li><a href="mailto:info@yoursite.com">Travelicious@gmail.com</a></li>
								<li><a href="#">Travelicious.com</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved <i class="icon-heart2" aria-hidden="true"></i> by <a href="#" target="_blank">Travelicious</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>

							</p>
						</div>
					</div>
				</div>
			</footer>		
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>