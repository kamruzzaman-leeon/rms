<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: adminlogin.php");
exit(); }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Dashboard | East-West Restaurant</title>
		<?php include 'links.php';?>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		<div class="bg">
			<input type="checkbox" id="check">
			<label for="check">
				<i class="fas fa-bars" id="btn"></i>
				<i class="fas fa-times" id="cancel"></i>
			</label>
			<div class="sidebar">
			<header>My Menu</header>
			<a href="#" class="active">
				<i class="fas fa-qrcode"></i>
				<span>Dashboard</span>
			</a>
			<a href="foodmenu.php">
				<i class='fas fa-hamburger'></i>
				<span>Food Menu</span>
			</a>
			<a href="customer.php">
				<i class="fa fa-fw fa-user"></i>
				<span>Customer</span>
			</a>
		</a>
		<a href="reservation.php">
			<i class="fas fa-calendar-check-o"></i>
			<span>Reservation</span>
		</a>
		<a href="logout.php">
			<i class='fas fa-sign-out-alt'></i>
			<span>Logout</span>
		</a>
	</div>
</body>
</html>