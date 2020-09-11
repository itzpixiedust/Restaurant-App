<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Burger Agape Restaurant</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Burger point"/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- header -->
	<header id="home">
		

	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top py-1">
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a id="logo" class="logo" href="index.php">
						<img src="images/logo.png" alt="" class="img-fluid"><span>Burger</span>Agape
					</a>
				</h1>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_web-dealingsls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="index.php">Home</a></li>
							
							<li><a href="menu.php">Menu</a></li>
					        <li class="px-4 fill-none">
								<a href="cart.php">Cart <span class="fa fa-shopping-cart mr-2"></span></a>
					        </li>
							
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 -->

	<!-- banner -->
	<div class="main-banner-2">

	</div>
	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Menu</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- menu -->
	<section class="portfolio py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<h3 class="w3ls-title mb-3">Our <span>Menu</span></h3>
				<p class="titile-para-text mx-auto"> You can finish that cheeseburger!! We believe in you :)</p>
			</div>
			<div class="row mt-4">
				<div class="col-md-4">
					<div class="gallery-demo">
						<a href="#gal1">
							<img src="images/blog1.jpg" alt=" " class="img-fluid" />
							<h4 class="p-mask">French Burger - <span>₹220</span></h4>
						</a>
					</div>
				</div>
				<div class="col-md-4 mt-md-0 mt-4">
					<div class="gallery-demo">
						<a href="#gal2">
							<img src="images/blog2.jpg" alt=" " class="img-fluid" />
							<h4 class="p-mask">Veg Muffin - <span>₹160</span></h4>
						</a>
					</div>
				</div>
				<div class="col-md-4 mt-md-0 mt-4">
					<div class="gallery-demo">
						<a href="#gal3">
							<img src="images/blog3.jpg" alt=" " class="img-fluid" />
							<h4 class="p-mask">Brioche - <span>₹180</span></h4>
						</a>
					</div>
				</div>
			</div>
			<div class="row mt-md-5">
				<div class="col-md-4 mt-md-0 mt-4">
					<div class="gallery-demo">
						<a href="#gal4">
							<img src="images/g1.jpg" alt=" " class="img-fluid" />
							<h4 class="p-mask">Cheese Burger - <span>₹200</span></h4>
						</a>
					</div>
				</div>
				<div class="col-md-4 mt-md-0 mt-4">
					<div class="gallery-demo">
						<a href="#gal5">
							<img src="images/g2.jpg" alt=" " class="img-fluid" />
							<h4 class="p-mask">Chicken Burger - <span>₹220</span></h4>
						</a>
					</div>
				</div>
				<div class="col-md-4 mt-md-0 mt-4">
					<div class="gallery-demo">
						<a href="#gal6">
							<img src="images/g3.jpg" alt=" " class="img-fluid" />
							<h4 class="p-mask">Veg Burger - <span>₹160</span></h4>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- gallery model-->
	<!-- gallery popup 1 -->
	<div id="gal1" class="pop-overlay">
		<div class="popup">
			<img class="img-fluid" src="images/blog1.jpg" alt="">
			<h4 class="p-mask">French Burger - - <span>₹220</span></h4>
			<a href="login.php" class="button-w3ls active mt-3">Order Now
				<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
			</a>
			<a class="close" href="#gallery">×</a>
		</div>
	</div>
	<!-- //gallery popup 1 -->
	<!-- gallery popup 2 -->
	<div id="gal2" class="pop-overlay">
		<div class="popup">
			<img class="img-fluid" src="images/blog2.jpg" alt="">
			<h4 class="p-mask">Veg Muffin - <span>₹160</span></h4>
			<a href="login.php" class="button-w3ls active mt-3">Order Now
				<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
			</a>
			<a class="close" href="#gallery">×</a>
		</div>
	</div>
	<!-- //gallery popup 2 -->
	<!-- gallery popup 3 -->
	<div id="gal3" class="pop-overlay">
		<div class="popup">
			<img class="img-fluid" src="images/blog3.jpg" alt="">
			<h4 class="p-mask">Brioche - <span>₹180</span></h4>
			<a href="login.php" class="button-w3ls active mt-3">Order Now
				<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
			</a>
			<a class="close" href="#gallery">×</a>
		</div>
	</div>
	<!-- //gallery popup 3 -->
	<!-- gallery popup 4 -->
	<div id="gal4" class="pop-overlay">
		<div class="popup">
			<img class="img-fluid" src="images/g1.jpg" alt="">
			<h4 class="p-mask">Cheese Burger - <span>₹200</span></h4>
			<a href="login.php" class="button-w3ls active mt-3">Order Now
				<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
			</a>
			<a class="close" href="#gallery">×</a>
		</div>
	</div>
	<!-- //gallery popup 4 -->
	<!-- gallery popup 5 -->
	<div id="gal5" class="pop-overlay">
		<div class="popup">
			<img class="img-fluid" src="images/g2.jpg" alt="">
			<h4 class="p-mask">Chicken Burger - <span>₹220</span></h4>
			<a href="login.php" class="button-w3ls active mt-3">Order Now
				<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
			</a>
			<a class="close" href="#gallery">×</a>
		</div>
	</div>
	<!-- //gallery popup 5 -->
	<!-- gallery popup 6 -->
	<div id="gal6" class="pop-overlay">
		<div class="popup">
			<img class="img-fluid" src="images/g3.jpg" alt="">
			<h4 class="p-mask">Veg Burger - <span>₹160</span></h4>
			<a href="login.php" class="button-w3ls active mt-3">Order Now
				<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
			</a>
			<a class="close" href="#gallery">×</a>
		</div>
	</div>
	<!-- //gallery popup 6 -->
	<!-- //menu -->

	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 footer-grid_section_1its footer-text">
					<!-- logo -->
					<h2>
						<a class="logo text-wh" href="index.php">
							<img src="images/logo.png" alt="" class="img-fluid"><span>Burger</span> Agape
						</a>
					</h2>
					<!-- //logo -->
					<p class="mt-lg-4 mt-3 mb-lg-5 mb-4">
					Burgers are our love language</p>
					
				</div>
				<div class="col-lg-4 footer-grid_section_1its my-lg-0 my-sm-4 my-4">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-text mt-4">
						<p>Address : 1234 , Mattom, Trivandrum, Kerala</p>
						<p class="my-2">Phone : +9155534894364</p>
						<p>Email : <a href="mailto:burgeragape@gmail.com">burgeragape@gmail.com</a></p>
					</div>
					<div class="footer-title mt-4 pt-md-2">
						<h3>Payment Method</h3>
					</div>
					<ul class="list-unstyled payment-links mt-4">
						<li>
							<a href="login.php"><img src="images/pay2.png" alt=""></a>
						</li>
						<li>
							<a href="login.php"><img src="images/pay5.png" alt=""></a>
						</li>
						<li>
							<a href="login.php"><img src="images/pay1.png" alt=""></a>
						</li>
						<li>
							<a href="login.php"><img src="images/pay4.png" alt=""></a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2020 Burger Agape. All rights reserved | Design by Roshni.</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>


</html>