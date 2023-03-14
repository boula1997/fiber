<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thermal Insulation MARKET</title>
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navtest" aria-expanded="false">
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
					<li class="active"><a href="home.php">Home <span class="sr-only">(current)</span></a></li>

					<li><a href="Shoppingcart.html">Shoping Cart </a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
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
	<!-- start video  -->
	<div class="homepage-block-full-width">
		<video class="homepage-video" width="100%" height="auto" muted autoplay loop>
			<source src="video/video.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>
	<!-- end video -->


	<!-- start about us  -->
	<section class="about text-center wow bounceIn" data-wow-duration="8s" data-wow-offset="300"> <!-- el text center da hy5li el goz2 da f el nos -->
		<!-- el hidden da by5ali el el h1 de f el mobile le m2as el so3'er t5tfii -->
		<h1 class="hidden-xs">Meet our new Store <span>Thermal Insulation Market</span></h1>
		<!-- el visible hna el gomla de htban bm2as as3'r f el mobile w matbnsh f el pc  -->
		<h3 class="visible-xs">Meet our new Store <span>Orange Market</span></h5>

			<p class="lead">Hello Let me introduce our new Products </p> <!-- el lead da by5li el css f el p mo5talef w a7la -->

	</section>

	<!-- End about us  -->

	<!-- start slider -->

	<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>

		</ol>

		<!-- Wrapper for slides -->

		<div class="carousel-inner" role="listbox">


			<div class="item">
				<img src="images/00.jpg" alt="...">
				<div class="carousel-caption">

				</div>
			</div>

			<div class="item item">
				<img src="images/02.jpg" alt="...">
				<div class="carousel-caption">

				</div>
			</div>

			<div class="item">
				<img src="images/03.jpg" alt="...">
				<div class="carousel-caption">

				</div>
			</div>



			<div class="item">
				<img src="images/04.jpg" alt="...">
				<div class="carousel-caption">

				</div>
			</div>

			<div class="item">
				<img src="images/05.jpg" alt="...">
				<div class="carousel-caption">

					<div class="item">
						<img src="images/06.jpg" alt="...">
						<div class="carousel-caption">

						</div>
					</div>

				</div>
			</div>

		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- end slider -->
	<!-- start price table -->
	<section class="price_table text-center">
		<div class="container">
			<h1> Our Amazing <span>PRICES</span> & <span>OFFERS</span></h1>
			<div class="row">


				<?php

					$pdo = new PDO('mysql:host=localhost;port=3306;dbname=orange', 
					'root', '');
					// See the "errors" folder for details...
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$stmt = $pdo->query("SELECT Price_disc,name, Price FROM items");
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


				?>

					<div class="col-md-4 col-sm-6 col-xm-12">
						<div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
							<div class="img">
								<img class="center-block" src="images/cart/<?php echo $row['name']; ?>" alt="img">
							</div>
							<ul class="info list-unstyled">
								<li>EGP <?php echo number_format($row['Price_disc'], 2); ?></li>
								<li class="right-text">EGP <?php echo number_format($row['Price'], 2); ?></li>
								<a href="cart.html">add to cart</a>



							</ul>
						</div>
					</div>


				<?php

				}
				?>






				<!-- <div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="3s" data-wow-offset="200">
						<div class="img">
							<img src="images/cart/2.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >EGP 5,899</li>
							<li class="right-text">EGP 6,499</li>
							<a href="cart.html" >add to cart</a>
								
						</ul>
					</div>	            
					
					
				</div>

				<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="4s" data-wow-offset="200">
						<div class="img">
							<img src="images/cart/3.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >EGP 2,499</li>
							<li class="right-text">EGP 3,499</li>
							<a href="cart.html" >add to cart</a>
								
						</ul>	
					</div>	
					
					
				</div>

				<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
						<div class="img">
							<img src="images/cart/4.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >EGP 3,499</li>
							<li class="right-text">EGP 5,499</li>
							<a href="cart.html" >add to cart</a>
								
						</ul>	
					</div>	
				</div>
			
			<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="3s" data-wow-offset="200">
						<div class="img">
							<img src="images/cart/5.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >EGP 6,499</li>
							<li class="right-text">EGP 7,499</li>
							<a href="cart.html" >add to cart</a>
								
						</ul>	
					</div>	
				</div>



				<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="4s" data-wow-offset="200">
						<div class="img">
							<img src="images/cart/6.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >EGP 1,499</li>
							<li class="right-text">EGP 2,499</li>
							<a href="cart.html" >add to cart</a>
								
						</ul>	
					</div>	
				</div> -->
			</div>

		</div>

	</section>

	<!-- End price table -->

	<!-- start section contact us -->
	<section class="contact-us text-center">
		<div class="container">
			<div class="row">

				<i class="fa fa-headphones fa-5x"></i>
				<h1>TELL US WHAT YOU FEEL</h1>
				<p class="lead">Feel free to contact us anytime</p>
				<div class="col-md-6 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="300">
					<form action="PHP3.php" method="POST" role="role ">

						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="username" name="User_Name">
						</div>

						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="email" name="Email">
						</div>

						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Cell phone" name="Cell_Phone">
						</div>


				</div>
				<div class="col-md-6 wow bounceInRight" data-wow-duration="1s" data-wow-offset="300">
					<div class="form-group">
						<textarea class="form-control input-lg" placeholder="Your Message" name="Comment"></textarea>

					</div>
					<button type="submit" value="submit" class="btn-lg btn-block"> Contact Us</button>
					</form>

				</div>
			</div>
		</div>

	</section>
	<!-- End section contact us -->

	<!-- start Footer -->
	<section class="footer">
		<div class="container">
			<div class="row ">
				<div class="col-lg-6">
					<h2>Site Map</h2>
					<ul class="list-unstyled threecol ">
						<li>Home</li>
						<li>Shoping cart</li>
						<li>categories</li>
						<li>Mobiles & Devices</li>
						<li>Tariff Plans</li>
						<li>Internet</li>
						<li>Offers and promotions</li>
						<li>Handsets and Devices</li>
						<li>Entertainment</li>
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
			Copyright&copy;2019 <span>Thermal Insulation Market</span>.Egypt
		</div>
	</section>
	<!-- End Footer -->




	<!--  -->




	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>

</body>

</html>