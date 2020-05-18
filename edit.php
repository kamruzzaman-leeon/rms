<?php include 'auth.php'?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Customer Update|East-West Restaurant</title>
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
									<a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>
									<a class="dropdown-item" href="order.php"><i class="fas fa-cookie-bite"></i> Order</a>
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
		<div class="container p-1">
			
			<h1 class="text-white bg-dark text-uppercase text-center">Customer Information Update</h1>
				<table class="table table-bordered table-striped text-center table-hover table-sm">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Moblie</th>
							<th>address</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="table">
				</table>
		</div>
		<Script>
			function loadDATA() {
			$.ajax({
		url: "backedit.php",
		type: "POST",
		cache: false,
		success: function(data){
			// alert(data);
			$('#table').html(data);
		}
		});
		// function change(reservation_id) {
		// console.log(reservation_id);
		// $.ajax({
		// url: "backedit.php",
		// type: "POST",
		// data:{
		// 	customer_id:customer_id
		// },
		
		// success: function(data){
			
			
			
		// 		loadDATA();
			
			
		// }
		// });
		
		}
		//main
		loadDATA()
		</script>
	</body>
</html>