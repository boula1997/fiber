<?php
require_once "pdo.php";
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thermal Insulation Market</title>
	<link rel="icon" href="images/icon2.jpg" />
	<link rel='stylesheet' href='css/bootstrap.css' />
	<link rel='stylesheet' href='css/font-awesome.min.css' />
	<link rel='stylesheet' href='css/style.css' />
	<link rel='stylesheet' href='css/media.css' />
	<link rel='stylesheet' href='css/animate.css' />
	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body>


	<!-- start nav bar  -->

	<!-- f awel tag ana shelt el navbar default w 5aleto inverse -->
	<!-- w kman zawed navbar-fixed-top 3ashan 
	el nav bar tfdl enzl maya mahama 3mlt scroll -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<!-- hna da button el code bt3 el zorar ely feh 3 shorat mn el gamb w shakl el 3 shorat da el span mmkn ashelhom w 7ot shakl tani mn 3ady -->
				<!-- hna kman feh el data target de feha id #navtest da bywadeni 3al mkan ely lama ados 3l button yft7li eh -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navtest"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- da code el logo  -->
				<a class="navbar-brand" href="#">Thermal Insulation<span> Market</span></a>
			</div>

			<!-- aho da el id ely lama button elu mn el gamb ado 3aleh hyft7li da -->
			<div class="collapse navbar-collapse" id="navtest">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php">Home </a></li>

					<li class="active"><a href="Shoppingcart.html">Shoping Cart <span
								class="sr-only">(current)</span></a></li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Categories<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="Mobiles.php">Mobiles</a></li>
							<li><a href="Accessories.php">Accessories</a></li>
							<li><a href="Routers.php">Routers</a></li>





						</ul>
					</li>
					<li><a href="add_products.html">Add Products</a></li>

					<li><a href="Find us.html">Find Us</a></li>
					<li><a href="Log in.html">Login</a></li>


				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<!-- end navbar -->

	<!-- start price table -->
	<section class="price_table text-center">
		<div class="container">
			<h1> Our Amazing <span>PRICES</span> & <span>OFFERS</span></h1>
			<div class="row">
				<?php

				$stmt = $pdo->query("SELECT Price_disc,name, Price FROM items where types='accessory'");
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


				?>

				<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
						<div class="img">
							<img class="center-block" src="images/cart/<?php echo $row['name']; ?>" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li>EGP
								<?php echo number_format($row['Price_disc'], 2); ?>
							</li>
							<li class="right-text">EGP
								<?php echo number_format($row['Price'], 2); ?>
							</li>
							<a href="cart.html">add to cart</a>



						</ul>
					</div>
				</div>


				<?php

				}
				?>
			</div>

		</div>

	</section>

	<!-- End price table -->


	<!-- start Footer -->
	<section class="footer">
		<div class="container">
			<div class="row ">
				<div class="col-lg-6">
					<h2>Site Map</h2>
					<ul class="list-unstyled threecol ">
						<li>Home</li>
						<li>Shop</li>
						<li>categories</li>
						<li>Dresses & Jump Suites</li>
						<li>Out Wear</li>
						<li>Tops & Kintwear</li>
						<li>Skirts & Trousers</li>
						<li>Accessories</li>
						<li>Perfumes</li>
						<li>Find Us</li>
						<li>Contact Us</li>

					</ul>
				</div>
				<div class="col-lg-6">
					<h2>Follow us </h2>
					<ul class="list-unstyled icons">
						<li> <i class="fa fa-facebook fa-5x " aria-hidden="true"></i></li>
						<li><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></li>
						<li> <i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></li>
						<li><i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i></li>
					</ul>
				</div>

			</div>

		</div>

		<div class="copyright text-center">
			Copyright&copy;2019 <span>Thermal Insulation Market</span>.Nagham
		</div>
	</section>
	<!-- End Footer -->




	<!--  -->


	<!--Start Loading Screen-->
	<!--   <section class="loading-overlay">
        	      <div class="sk-folding-cube text-center">
  <div class="sk-cube1 sk-cube"></div>
  <div class="sk-cube2 sk-cube"></div>
  <div class="sk-cube4 sk-cube"></div>
  <div class="sk-cube3 sk-cube"></div>
</div>
        </section> -->

	<!--End Loading Screen-->

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>

</body>

</html>﻿