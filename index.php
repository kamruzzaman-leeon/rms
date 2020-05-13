<?php include 'auth.php'?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>East-West Restaurant | Home</title>
		<?php include'common/header.php';?>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="colorchange"><i class="fas fa-angle-double-up"></i></span></button>
		<!-- echo "<script>console.log(".$_SESSION['customer_id'].");</script>"; -->
	</head>
	
	<body>
		<div>
			<header>
				<!-- header part -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="index.php">
						<img class="toplogo" src="img/East-West.png" alt="nav-logo">
					</a>
					<!-- navbar toggle or mobile button -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#"><i class="fa fa-fw fa-home"></i> Home<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="reservation.php"><i class="fa fa-calendar-check-o"></i> Reservation</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="menu.php"><i class="fa fa-list-alt"></i> Menu</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['username'];?></a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="edit.php"><i class="fas fa-edit"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="fas fa-cookie-bite"></i> Order</a>
									<div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-cart-plus"></i> Cart</a>
							</li>
							
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search food" aria-label="Search">
							<button class="btn btn-outline-info my-2 my-sm-0" type="submit"><span class="colorchange">Search</span></button>
						</form>
					</div>
				</nav>
			</header>
			<!-- carosuel -->
			<section>
				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
						<li data-target="#demo" data-slide-to="3"></li>
						<li data-target="#demo" data-slide-to="4"></li>
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/img1.jpg" alt="img1" width="1100" height="500">
							<div class="carousel-caption">
								<h1 class="carousel1">Welcome to <span class="colorchange carousel1"> East-West Restaurant</span></h1><br><br>
								
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/img2.jpg" alt="img2" width="1100" height="500">
							<div class="carousel-caption">
								<h2 class="carousel2">The Quality Food!</h2><br><br>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/img3.jpg" alt="img3" width="1100" height="500">
							<div class="carousel-caption">
								<h2 class="carousel2"> We serve only genuinely delicious food.</h2><br><br>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/img4.jpg" alt="img4" width="1100" height="500">
							<div class="carousel-caption">
								<h2 class="carousel2">Try us and then buy us!</h2><br><br>
								
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/img5.jpg" alt="img5" width="1100" height="500">
							<div class="carousel-caption">
								<h2 class="carousel2">Quality Food At Your Door.</h2><br><br>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</section>
			
			<!-- about us -->
			<section>
				<div class="container-fluid">
					<h1 class="text-center text-capitalize pt-5 colorchange">About Us</h1>
					<hr class="w-25 mx-auto">
					<br>
					<div class="row">
						<div class="col-lg-6 col-12">
							<h1 class="text-center text-capitalize"> welcome to East-West Restaurant</h1>
							<hr>
							<p class="pt-4 lead">
								We serves the highest quality traditinal bangla food, South Indian Food, Chinese, Se Food & Kebab. Here food is more than a meal, its a culinary experience.
								All dishes can be prepared of your request in the degree of mind medium, hot very hot and spicy.
							</p>
							
						</div>
						<div class="col-lg-6 col-12"><img src="img/about1.jpg" alt="about1.jpg" class="img-fluid"></div>
						
					</div>
					<br><br><br>
					<div class="row">
						<div class="col-lg-6 col-12"><img src="img/about2.jpg" alt="about image2" class="img-fluid"></div>
						<div class="col-lg-6 col-12">
							<h1 class="text-center text-capitalize">Fast Food</h1>
							<hr>
							<p class="pt-4 lead">
								A fast-food or quick-service restaurant provides the quickest service and food at the cheapest prices. The décor in most fast-food restaurants is simple. Fast-food restaurants are often franchises of a brand with many locations. The largest-fast food chains operate globally. Some individuals choose to open small, local, non-chain fast food restaurants. Fast-food restaurants often include a place to dine, while some may possess only drive-through or walk-up windows for customers to order and pick up food. Fast-food restaurants often serve hamburgers, chicken, sub sandwiches, Mexican fare or ice cream.
							</p>
							
							
						</div>
						
					</div>
					<br><br><br>
					<div class="row">
						
						<div class="col-lg-6 col-12">
							<h1 class="text-center text-capitalize">FINE DINING</h1>
							<hr>
							<p class="pt-4 lead">
								
								Fine-dining restaurants usually come with the most elaborate menus and expensive prices. Owners of fine-dining restaurants want to present an atmosphere of elegance and grace. Many require customers to make reservations to dine. Some restaurants enforce a certain dress code, while others do not. Fine-dining restaurants employ chefs who attended culinary schools and possess many years of experience. Most customers do not mind paying the expensive prices because of the perceived value they receive from eating at fine-dining restaurants. Some restaurants offer five-course meals and an expensive and expansive wine list.
							</p>
							
						</div>
						<div class="col-lg-6 col-12"><img src="img/about3.jpg" alt="about3.jpg" class="img-fluid"></div>
					</div>
					<br><br><br>
				</div>
			</section>
			<!-- menu -->
			<!-- footer -->
			<?php include'common/footer.php'; ?>
			
		</div>
	</body>
</html>