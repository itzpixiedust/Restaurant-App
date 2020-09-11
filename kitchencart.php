<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Kitchen cart</title>
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
					<a id="logo" class="logo" href="kitchencart.php">
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
							
							<li class="px-4 fill-none">
                                <a href="kitchencart.php">Kitchen Cart <span class="fa fa-shopping-cart mr-2"></span></a>
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
			
			<li class="breadcrumb-item active" aria-current="page">Kitchen Cart</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				
                <div class="cart-items">
<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cart";
$connection = new mysqli($servername,$dbusername,$dbpassword,$dbname);

    $sql = "SELECT `id`, `table_num`, `item_name`, `item_price`, `item_units` FROM `cartdetails` order by id desc";
    $result = $connection->query($sql);
    
    if($result->num_rows > 0) {
    // output data of each row
        echo "Cart items Remaining";
        echo "<table class: 'table'>
            <br>";
        while($row = $result->fetch_assoc()) {
            $id=  $row["id"];          
            $table_num= $row["table_num"];
            $item_name= $row["item_name"];
            $item_price= $row["item_price"];
            $item_units= $row["item_units"];
            $total=$item_price*$item_units;
            echo "
            
              <table class: 'table'>
              <br>
              <input type='hidden' name='id' value='$id'/>
              <tr><td>Table No :</td> <td>$table_num</td></tr>
              <tr><td>Item Name :</td> <td>$item_name</td></tr>
              <tr><td>Item Price :</td> <td>$item_price</td></tr>
              <tr><td>Item Units :</td> <td>$item_units</td></tr>
              <tr><td>Total Price :</td> <td>$total</td></tr>";

        }
        
    } 
   
?>
				
				</div>


			</div>
		</div>
	</div>
	<!-- //login -->
	

</body>

</html>
