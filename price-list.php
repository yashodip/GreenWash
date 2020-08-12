<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	if (!isset($_SESSION['uid'])) {
		header('location:login.php');
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GreenWash</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<header>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Greenwash</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link " href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="index.php#service">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services</a>
					<a class="nav-item nav-link" href="index.php#about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a>
					<a class="nav-item nav-link active" href="price-list.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price List</a>
					<a class="nav-item nav-link" href="price-list.php#main-contact" data-toggle="modal" data-target="#contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a>
				</div>
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="#">
						<?php
						echo "Welcome " . $_SESSION['uname'];
						?> <span class="sr-only">(current)</span>&nbsp;&nbsp;&nbsp;</a>
					<button class="btn btn-danger text-center" id="logout">Log out</button>
				</div>
			</div>
		</nav>
	</header>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col-12 ">
				<ul class="nav justify-content-center">
					<li class="nav-item active lead text-dark" id="w">
						<a class="nav-link active text-dark " href="#wash-and-iron" data-toggle="tooltip" data-placement="bottom" title="Click to see Cost of  wash and Iron">Wash-and-Iron</a>
					</li>
					<li class="nav-item" id="i">
						<a class="nav-link text-dark"  href="#ironing" data-toggle="tooltip" data-placement="bottom" title="Click to see cost of only Ironing">Ironing</a>
					</li>
					<li class="nav-item" id="d">
						<a class="nav-link text-dark" href="#dry-cleaning" data-toggle="tooltip" data-placement="bottom" title="Click to see cost of Dry-cleaning">Dry-cleaning</a>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<div id="wash-and-iron">
		<section class="container h-100 services">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto ">
							<h2 class="text-center fnt-wt-sm">Men</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Shirts/Tshirts</td>
												<td> <i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Kurta/Shorts</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Trousers/Pyjama </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 22</td>
											</tr>
											<tr>
												<td>Jeans </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 28</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Dhoti/Lungi </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 30</td>
											</tr>
											<tr>
												<td>Sweat Shirt/Pullover </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 34</td>
											</tr>
											<tr>
												<td>Kids Wear</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Sweater </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 34</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">Women</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Dupatta/Scarf</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>Shirt/Tshirts </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Tops/Tunics </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Shrugs/Blouse </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Trousers/Leggings </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 22</td>
											</tr>
											<tr>
												<td>Jeans/Jeggings </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 28</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Kurta/Shorts/Skirts </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i>18</td>
											</tr>
											<tr>
												<td>Night Suit (set)/Gown </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i>28</td>
											</tr>
											<tr>
												<td>Peticoat </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i>28</td>
											</tr>
											<tr>
												<td>Plain Saree</td>
												<td> <i class="fa fa-inr" aria-hidden="true"></i>58</td>
											</tr>
											<tr>
												<td>Sweat Shirt/Pullover/Sweater </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i>34</td>
											</tr>
											<tr>
												<td>One Piece </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i>28</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">HouseHold</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Pillow Cover </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>Hand Towel </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>Bath Towel </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 24</td>
											</tr>
											<tr>
												<td>Bedsheet (single) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 28</td>
											</tr>
											<tr>
												<td>Bedsheet (double) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 38</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Duvet cover (single)</td>
												<td> <i class="fa fa-inr" aria-hidden="true"></i> 38</td>
											</tr>
											<tr>
												<td>Duvet cover (double) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 58</td>
											</tr>
											<tr>
												<td>Curtains (single) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 58</td>
											</tr>
											<tr>
												<td>Curtains (double)</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 108</td>
											</tr>

											<tr>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div id="ironing">
		<section class="container-fluid services">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">Men</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Shirts/Tshirts</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
											<tr>
												<td>Kurta/Shorts</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
											<tr>
												<td>Trousers/Pyjama </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
											<tr>
												<td>Jeans </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Dhoti/Lungi </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 12</td>
											</tr>
											<tr>
												<td>Sweat Shirt/Pullover </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>Kids Wear</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 8</td>
											</tr>
											<tr>
												<td>Sweater </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">Women</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Dupatta/Scarf</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 6</td>
											</tr>
											<tr>
												<td>Shirt/Tshirts </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
											<tr>
												<td>Tops/Tunics </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
											<tr>
												<td>Shrugs/Blouse </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
											<tr>
												<td>Trousers/Leggings </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i>7</td>
											</tr>
											<tr>
												<td>Jeans/Jeggings </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Kurta/Shorts/Skirts </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 7</td>
											</tr>
											<tr>
												<td>Night Suit (set)/Gown </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 8</td>
											</tr>
											<tr>
												<td>Peticoat </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 8</td>
											</tr>
											<tr>
												<td>Plain Saree</td>
												<td> <i class="fa fa-inr" aria-hidden="true"></i> 20</td>
											</tr>
											<tr>
												<td>Sweat Shirt/Pullover/Sweater </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>One Piece </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 10</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">HouseHold</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Pillow Cover </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>Hand Towel </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>Bath Towel </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 24</td>
											</tr>
											<tr>
												<td>Bedsheet (single) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 28</td>
											</tr>
											<tr>
												<td>Bedsheet (double) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 38</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 ">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Duvet cover (single)</td>
												<td> <i class="fa fa-inr" aria-hidden="true"></i> 38</td>
											</tr>
											<tr>
												<td>Duvet cover (double) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 58</td>
											</tr>
											<tr>
												<td>Curtains (single) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 58</td>
											</tr>
											<tr>
												<td>Curtains (double)</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 108</td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div id="dry-cleaning">
		<section class="container-fluid services">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">Men</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Shirts/Tshirts</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Kurta/Shorts</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Trousers/Pyjama </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 22</td>
											</tr>
											<tr>
												<td>Jeans/Dhoti/Lungi </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 55</td>
											</tr>
											<tr>
												<td>Designer Kurta</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 65</td>
											</tr>
											<tr>
												<td>Sherwani/Suit</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 100</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>

											<tr>
												<td>Sweat Shirt/Pullover </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 34</td>
											</tr>
											<tr>
												<td>Kids Wear</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Sweater </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 34</td>
											</tr>
											<tr>
												<td>Coat/Sports Jacket</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 150</td>
											</tr>
											<tr>
												<td> Nehru Jacket/Leather Jacket</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 200</td>
											</tr>
											<tr>
												<td> Blazer</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 250</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">Women</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Dupatta/Scarf</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 15</td>
											</tr>
											<tr>
												<td>Shirt/Tshirts </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Tops/Tunics </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Shrugs/Blouse </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 18</td>
											</tr>
											<tr>
												<td>Trousers/Leggings </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 22</td>
											</tr>
											<tr>
												<td>Jeans/Jeggings </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 28</td>
											</tr>
											<tr>
												<td>Kurta/Shorts/Skirts </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 45</td>
											</tr>
											<tr>
												<td>Designer Kurta</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 125</td>
											</tr>
											<tr>
												<td>Night Suit (set)/Gown</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 100</td>
											</tr>
											<tr>
												<td>Peticoat</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 60</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Plain Saree </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 100</td>
											</tr>
											<tr>
												<td> Heavy Saree</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 200</td>
											</tr>
											<tr>
												<td>Bridal Saree </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 400</td>
											</tr>
											<tr>
												<td>Sweat Shirt/Pullover/Cardigan</td>
												<td> <i class="fa fa-inr" aria-hidden="true"></i> 100</td>
											</tr>
											<tr>
												<td> Shawl</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 100</td>
											</tr>
											<tr>
												<td>Designer Shawl </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 150</td>
											</tr>
											<tr>
												<td> Lehanga</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 350</td>
											</tr>
											<tr>
												<td>Coat/Blazer </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 150</td>
											</tr>
											<tr>
												<td>One piece </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 125</td>
											</tr>
											<tr>
												<td> Jacket</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 150</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="w-50 mx-auto">
							<h2 class="text-center fnt-wt-sm">HouseHold</h2>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td> Pillow Cover/Hand Towel </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 35</td>
											</tr>
											<tr>
												<td>Table cloth </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 45</td>
											</tr>
											<tr>
												<td> Bedsheet (single)</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 100</td>
											</tr>
											<tr>
												<td> Bedsheet (double)</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 125</td>
											</tr>
											<tr>
												<td> Duvet cover (single)</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 200</td>
											</tr>
											<tr>
												<td>Duvet cover (double))</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 300</td>
											</tr>
											<tr>
												<td>Curtains (single) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 130</td>
											</tr>

										</tbody>
									</table>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
									<table class=" table table-bordered table-hover table-condensed">
										<tbody>
											<tr>
												<th>Product</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Curtains (double) </td>
												<td> <i class="fa fa-inr" aria-hidden="true"></i> 200</td>
											</tr>
											<tr>
												<td> Blanket/Quilt(single)</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 250</td>
											</tr>
											<tr>
												<td> Blanket/Quilt(double)</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 350</td>
											</tr>
											<tr>
												<td>Sofa Cover</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 120</td>
											</tr>
											<tr>
												<td>Floormat</td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 150</td>
											</tr>
											<tr>
												<td>Carpet (per sqft) </td>
												<td><i class="fa fa-inr" aria-hidden="true"></i> 45</td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	<section id="main-contact" class="container-fluid">
        	<div class="row">
            	<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3 ">
					<div class="modal fade" id="contact" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<h2 class="modal-title">Contact Us</h2>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									
								</div>
								<div class="modal-body">
									<form role="form" action=""  method="post" id="contact-form" name="contact">
										<div class="form-group">
											<label for="name">Full Name</label>
											<input type="text" class="form-control" id="name" name="name">
										</div>
										<div class="form-group">
											<label for="email">Email address:</label>
											<input type="email" class="form-control" id="email" name="email">
										</div>
										<div class="form-group">
											<label for="message">Message:</label>
											<textarea rows="3" class="form-control" id="message" name="message"></textarea>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									
											<input type="submit" name="submit_contact" id="submit-button" class="btn btn-default btn-primary"/>
										</div>
									</form> 
								</div>
								
							</div>
						</div>
					</div>
                </div>
            </div>
    </section>
	<footer class=" navbar navbar-default navbar-inverse mar-bottom">
		<div class="container-fluid ">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav ">
					<li><a href="index.html">Home &nbsp;&nbsp;&nbsp;</a></li>
					<li><a href="#">Services&nbsp;&nbsp;&nbsp;</a></li>
					<li><a href="#">About Us&nbsp;&nbsp;&nbsp;</a></li>
					<li class="active"><a href="#">Price List&nbsp;&nbsp;&nbsp;</a></li>
					<li><a href="#">Contact Us</a></li>
					<li class="text-right"><a href="javascript:void(0)">2016.&copy;All rights reserved by GreenWash Pvt. Ltd.</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</footer>
	<script src="./js/jquery-3.2.1.min.js"></script>
	<script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main_1.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/valid_contact.js"></script>
	<script src="./js/logout.js"></script>
	<script>
		$(document).ready(function() {
			$('[data-toggle="popover"]').popover();
			$("#ironing, #dry-cleaning").hide();
			$("[href='#wash-and-iron']").click(function() {
				$("#ironing, #dry-cleaning").hide();
				$("#wash-and-iron").show();
				$("#w").addClass("active lead");
				$("#i").removeClass("active lead");
				$("#d").removeClass("active lead");
			});
			$("[href='#ironing']").click(function() {
				$("#wash-and-iron, #dry-cleaning").hide();
				$("#ironing").show();
				$("#i").addClass("active lead");
				$("#w").removeClass("active lead");
				$("#d").removeClass("active lead");
			});
			$("[href='#dry-cleaning']").click(function() {
				$("#wash-and-iron,#ironing").hide();
				$("#dry-cleaning").show();
				$("#d").addClass("active lead");
				$("#i").removeClass("active lead");
				$("#w").removeClass("active lead");
			});
		});
	</script>
</body>

</html>