<!DOCTYPE html>
<html>
	<head>
		<title>Reservation Table| East West Restaurant</title>
		<?php include "links.php" ?>
	</head>
	<body>
		<div class="container">
			<h1 class="text-white bg-dark text-uppercase text-center">Reservation</h1>
			<table class="table table-bordered table-striped text-center table-sm">
				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>date</th>
						<th>person</th>
						<th>slot</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="table">
					
				</tbody>
			</table>
		</div>
		<script>
		
		
		function loadDATA() {
			$.ajax({
		url: "backreservation.php",
		type: "POST",
		cache: false,
		success: function(data){
			// alert(data);
			$('#table').html(data);
		}
		});
		}
		function change(reservation_id) {
		console.log(reservation_id);
		$.ajax({
		url: "reservation_approve.php",
		type: "POST",
		data:{
			reservation_id:reservation_id
		},
		
		success: function(data){
			
			
			
				loadDATA();
			
			
		}
		});
		
		}
		//main
		loadDATA()
		</script>
	</body>
</html>