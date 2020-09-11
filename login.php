
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
						<img src="images/logo.png" alt="" class="img-fluid"><span>Tasty</span> Burger
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
			<li class="breadcrumb-item active" aria-current="page">Order</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Order</h5>
					<form method="post">
						<div class="form-group">
							<label class="mb-2">Table number</label>
							<input type="number" class="form-control" name="tablenum" placeholder="" required="">
							
						</div>
						<div class="form-group">
							<label>Burger Name</label>
							<input type="text" class="form-control" name="foodname" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="mb-2">Price</label>
							<input type="number" class="form-control" name="foodprice" placeholder="" required="">
							
						</div>
						<div class="form-group">
							<label class="mb-2">Item Units</label>
							<input type="number" class="form-control" name="foodunits" placeholder="" required="">
							
						</div>
						
						<button type="submit" class="btn submit mb-4" name="submit">Order now</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
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

<?php

if(isset($_POST["submit"])) {

    $table_num=$_POST["tablenum"];
	$item_name=$_POST["foodname"];
	$item_price=$_POST["foodprice"];
    $item_units=$_POST["foodunits"];
    
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="cart";
    $connection = new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $sql="INSERT INTO `cartdetails`(`table_num`, `item_name`, `item_price`, `item_units`) VALUES ('$table_num','$item_name','$item_price','$item_units')";
    $result= $connection->query($sql);
    if($result===TRUE)
    {
        $total=$item_price*$item_units;
        
        echo "<table class: 'table'>
        <tr><td>Table No :</td> <td>$table_num</td></tr>
        <tr><td>Item Name :</td> <td>$item_name</td></tr>
        <tr><td>Item Price :</td> <td>$item_price</td></tr>
        <tr><td>Item Units :</td> <td>$item_units</td></tr>
        <tr><td>Total Price :</td> <td>$total</td></tr>";

    }
    else
    {
        echo "Error",$connection->error;
    }
    
}    
?>