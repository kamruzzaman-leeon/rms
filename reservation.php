<?php include 'auth.php'?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>East-West Restaurant | reservation</title>
		<?php include'common/header.php';?>
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	</head>
	<body>
		<section>
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
							<li class="nav-item">
								<a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="reservation.php"><i class="fa fa-calendar-check-o"></i> Reservation<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="menu.php"><i class="fa fa-list-alt"></i> Menu</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i> Customer</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>
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
			<div class="container-fluid res">
				<div class="row">
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- form start -->
						<form action="check.php" class="form-conatiner" method="POST">
							<h1 class="text-white text-center">Reservation</h1>
							<div class="form-group text-white">
								<label>Date</label>
								<input type="date" name="date" value=""class="form-control" autocomplete="off" placeholder="date">
							</div>
							<div class="form-group text-white">
								<label>person</label>
								<input type="number" min="1" step="1" name="person" value=""class="form-control" autocomplete="off" placeholder="person">
							</div>
							<div class="form-group text-white">
								<label for='slot'>slot</label>
								<select id='slot'>
									<option value="12:00pm-1:00pm">12:00pm-1:00pm</option>
									<option value="1:30pm-2:30pm">1:30pm-2:30pm</option>
									<option value="3:00pm-4:00pm">3:00pm-4:00pm</option>
									<option value="4:30pm-5:30pm">4:30pm-5:30pm</option>
									<option value="6:00pm-7:00pm">6:00pm-7:00pm</option>
									<option value="7:30pm-8:30pm">7:30pm-8:30pm</option>
									<option value="9:00pm-10:00pm">9:00pm-10:00pm</option>
								</select>
							</div>
							<div class="text-center">
								<input type="submit" class="btn btn-success " name="submit">
							</div>
							
						</form>
						<!-- form end -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12"></div>
					
				</div>
				
			</div>
			<!--footer -->
			<?php include'common/footer.php'; ?>
		</section>
	</body>
</html>