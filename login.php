<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login | East-West Restaurant</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/reg.css">
	</head>
	<body>
		
		<div class="container-fluid bg">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- form start -->
					<form action="check.php" class="form-conatiner" method="POST">
						<h1 class="text-white text-center">Customer Login</h1>
						<div class="form-group text-white">
							<label>Username</label>
							<input type="text" name="username" value=""class="form-control" autocomplete="off" placeholder="username">
						</div>
						<div class="form-group text-white">
							<label>Password</label>
							<input type="text" name="password" value=""class="form-control" autocomplete="off" placeholder="password">
						</div>
						<div class="text-center">
							<input type="submit" class="btn btn-success " name="submit">
						</div>
						<h5 class="text-center">Not registered yet? <a href='registration.php'>Register Here</a></h5>
					</form>
					<!-- form end -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
			
		</div>
		
	</body>
</html>