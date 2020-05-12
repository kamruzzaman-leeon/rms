<?php include 'auth.php'?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>East-West Restaurant | reservation</title>
		<?php include'common/header.php';
		echo "<script>console.log(".$_SESSION['customer_id'].");</script>";
		
		?>
		

		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	</head>
	<body>
		<section class="res">
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
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['username'];?></a>
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
			<div class="container">
			<h1 class="text-white text-uppercase text-center">Reservation</h1>
			
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Reservation</button>
			</div>
			<div>
				<h2 class="text-danger">All Records</h2>
				<div id="allrecords"></div>
			</div>
			<!-- The Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Add Reservation</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="form-group">
								<label>date</label>
								<input type="date" name="" id="date" class="form-control">
							</div>
							<div class="form-group">
								<label>Slot</label>
								<select id='slot' class="form-control">
									<option value="">-----</option>
									<option value="12:00pm-1:00pm">12:00pm-1:00pm</option>
									<option value="1:30pm-2:30pm">1:30pm-2:30pm</option>
									<option value="3:00pm-4:00pm">3:00pm-4:00pm</option>
									<option value="4:30pm-5:30pm">4:30pm-5:30pm</option>
									<option value="6:00pm-7:00pm">6:00pm-7:00pm</option>
									<option value="7:30pm-8:30pm">7:30pm-8:30pm</option>
									<option value="9:00pm-10:00pm">9:00pm-10:00pm</option>
								</select>
							</div>
							<div class="form-group">
								<label>Person</label>
								<input type="number" min="1" step="1" id="person" value=""class="form-control">
							</div>
							<!-- <div class="form-group">
								<label>Status</label>
								<select id="status"class="form-control">
									<option value="Pending">Pending</option>
								</select>
							</div> -->
					
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal" onclick="addRecord()">Save</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>	
	</section>
<?php include'common/footer.php'; ?> 
		<script>
			$(document).ready(function()
			{
				readRecords(); 
			});
			function readRecords()
			{
				var readrecord ="readrecord";
				$.ajax({
					url:"backreservation.php",
					type:"post",
					data:{
						readrecord:readrecord},
						success:function(data,status){
							$('#allrecords').html(data);
						}
					
				});
			} 
			function addRecord(){
				var date =$('#date').val();
				var slot =$('#slot').val();
				var person =$('#person').val();
				//var status =$('#status').val();
				//console.log(person);
				

				$.ajax({
					url:"./backreservation.php",
					type:'post',
					data:{
						date:date,
						slot:slot,
						person:person,
						status:status

						},

						success:function(data,status)
						{

							//console.log(data);
							
							readRecords();
						}
				});
			}
			
		</script>
		
	</body>
</html>