<!DOCTYPE html>
<html lang="en">
<head>
	<title>Productos</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
	session_start();
	echo $_SESSION['name'];
?>
	<form action="pedidios.php" method="POST">
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>

		<!-- Header section -->
			<header class="header-section">
			<div class="header-top">
				<div class="container">
					<div class="header-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="user-panel">
						<a href="cerrar.php">cerar sesion</a>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
					<ul class="main-menu">
						<li><a href="actualizar.php">Actualizar datos</a></li>
						<li><a href="about.php">Productos</a></li>
						<!-- <li><a href="recipes.html">Receipies</a></li>
						<li><a href="#">Reviews</a></li> -->
						<li><a href="contact.html">Contactos</a></li>
						<li><script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
							<script>paypal.Butons().render('body');</script></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- Header section end -->


		<!-- Hero section -->
		<br><br>
		<section class="page-top-section set-bg" data-setbg="img/saludable.jpg">
			<div class="container">
				<h2>Productos</h2>
			</div>
		</section>
		<!-- Hero section end -->


		<!-- Search section -->
		<!-- <div class="search-form-section">
			<div class="sf-warp">
				<div class="container">
					<form class="big-search-form">
						<select>
							<option>All Recipes Categories</option>
							<option>Pizza</option>
							<option>Salads</option>
							<option>Desserts</option>
							<option>Side Dishes</option>
						</select>
						<select>
							<option>All Ingredients</option>
							<option>Breakfast</option>
							<option>Lunch</option>
							<option>Dinner</option>
						</select>
						<input type="text" placeholder="Search Receipies">
						<button class="bsf-btn">Search</button>
					</form>
				</div>
			</div>
		</div> -->
		<!-- Search section end -->


		<!-- About section -->
		<section class="about-section spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 about-text">
						<h2>Tenemos los siguientes Productos</h2>
						<p>Nuestros Productos tiene de una alta calidad de.<br>
							Frescura, Dulzura, Nutricion y Calidad<br>
							Siempres somos cuidados con los metodos de empacamiento con los temodos de salubridad y con 
							la forma como se empaca las frutas en las vasos que despues son sellados</p>
					</div>
					<div class="col-lg-6">
						<img src="img/recipes/fresas.png" alt="">
					</div>
				</div>
			</div>
		</section>
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
			<img class="activator" src="img/recipes/manga.png" style="width: 600px; right: 60px; height: 600px;">
		</div>
		<div class="card-content">
			<span class="card-title activator grey-text text-darken-4"><p><b><i><h5>Fruta Fresca</h5></i></b><i class="material-icons right">	Envasados</i></span>
		</div>
		<div class="card-reveal">
			<span class="card-title grey-text text-darken-4"><p><b><i><h5>Fruta Fresca</h5></i></b><br><i class="material-icons right">Abierto</i>	</span>
			250gr de fruta fresca (con su respectivo kit para consumo)<br>
			<ul>
				<li>Mango biche</li>
				<li>Papaya</li>
				<li>Pina</li>
				<li>Melon</li>
			</ul><br>
			(incursionando en otras frutas, realizando proceso de prueba respectivo) 
			<table class="responsive-table">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Tipo</th>
						<th>Precio</th>
						<th>Link</th>
					</tr>
			</thead>

			<tbody>
				<tr>
					<td>Fruta Fresca</td>
					<td>Envasado</td>
					<td>$2.500</td>
					<td> <a href="formulario.html">pagar</a></td>
				</tr>
			</tbody>
			</table></p>
		</div>
	</div>

	<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
			<img class="activator" src="img/recipes/frutapicada.png" style="width: 500px; right: 400%;">
		</div>
		<div class="card-content">
			<span class="card-title activator grey-text text-darken-4"><p><b><i><h5>Fruta Picada</h5></i></b><i class="material-icons right">Envasados</i></span>
			<p><a href="#"></a></p>
		</div>
		<div class="card-reveal">
			<span class="card-title grey-text text-darken-4"><p><p><b><i><h5>Parfait</h5></i></b><i class="material-icons right">close</i></span>
				125gr de fruta( manzana, fresa y durazno en almíbar)<br>
				4 onzas de yogurt alpina deslactosado<br>
				5 gr de granola<br>
			<table class="responsive-table">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Tipo</th>
						<th>Precio</th>
						<th>link</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Parfait</td>
						<td>Envasado</td>
						<td>$3.800</td>
						<td> <a href="formulario.html">pagar</a></td>
					</tr>
				</tbody>
			</table></p>
		</div>
	</div>

	<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
			<img class="activator" src="img/recipes/fresas.png" style="width: 500px; right: 400px;">
		</div>
		<div class="card-content">
			<span class="card-title activator grey-text text-darken-4"><p><b><i><h5>Fresas</h5></i></b><i class="material-icons right">Envasados</i	></span>
			<p><a href="#"></a></p>
		</div>	
		<div class="card-reveal">
			<span class="card-title grey-text text-darken-4"><p><p><b><i><h5>Fresas</h5></i></b><i class="material-icons right">close</i></span>
				125gr de fresa
				4 onzas de crema de leche
			<table class="responsive-table">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Tipo</th>
						<th>Precio</th>
						<th>link</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Parfait</td>
						<td>Envasado</td>
						<td>$2.500</td>
						<td> <a href="formulario.html">pagar</a></td>
					</tr>
				</tbody>
			</table></p>
		</div>
	</div>
	<!-- About section end -->


	<!-- Facts section -->
	<!-- <section class="facts-section">
		<div class="facts-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="img/icon/1.png" alt="">
						</div>
						<h2>1287</h2>
						<p>Amazing receipies</p>
					</div>
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="img/icon/2.png" alt="">
						</div>
						<h2>25</h2>
						<p>Wine pairings</p>
					</div>
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="img/icon/3.png" alt="">
						</div>
						<h2>471</h2>
						<p>Meat receipies</p>
					</div>
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="img/icon/4.png" alt="">
						</div>
						<h2>326</h2>
						<p>Desert receipies</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Facts section end -->


	<!-- Newsletter section -->
	<!-- <section class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 nl-text">
					<h2>Subscribe to our newsletter</h2>
					<form class="newsletter-form">
						<input type="text" placeholder="Your E-mail">
						<button class="site-btn">Subscribe</button>
					</form>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. </p>
				</div>
				<div class="col-lg-6">
					<img class="nl-sp-img" src="img/newslatter.png" alt="">
				</div>
			</div>
		</div>
	</section> -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<!-- <li><a href="index.html">Inicio</a></li>
						<li><a href="#">Productos</a></li> -->
						<li><a href="#">Contactos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
		<!-- Footer section end -->
		<!--====== Javascripts & Jquery ======-->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>

</body>
</html>