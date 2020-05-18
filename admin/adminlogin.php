<!DOCTYPE html>
<html>
	<head>
		<title>Admin login | East-West Restaurant</title>
		<?php include 'links.php';?>
	</head>
	<body>
		<div class="container-fluid bg">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- form start -->
					<form action="logincheck.php" class="form-conatiner" method="POST">
						<h1 class="text-white text-center">Admin Login</h1>
						<div class="form-group text-white">
							<label>Username</label>
							<input type="text" name="username" value=""class="form-control" autocomplete="off" placeholder="username">
						</div>
						<div class="form-group text-white">
							<label>Password</label>
							<input type="text" name="password" value=""class="form-control" autocomplete="off" placeholder="password">
						</div>
						<div class="text-center">
						<input type="submit" class="btn btn-success " name="submit"></div>
					</form>
					<p class="text-white text-center text-capitalize">full project completed by kamruzzaman leeon</p>
					<!-- form end -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
			
		</div>
	</body>
</html>