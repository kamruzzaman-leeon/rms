<!DOCTYPE html>
<html>
	<head>
		<title>Customer Table| East West Restaurant</title>
		<?php include "links.php" ?>
	</head>
	<body>
		<div class="container">
			<h1 class="text-white bg-dark text-uppercase text-center">Customer Information</h1>
			
			
			
			<table class="table table-striped table-bordered text-center table-hover table-sm">
				<tr>
					<th>No</th>
					<th>Customer ID</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address </th>
				</tr>
				
				<?php include 'connection.php';
				$sql = "SELECT `customer_id`, `username`, `email`, `mobile`, `address` FROM `customer`";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
				$number=1;
				while($row=$result->fetch_assoc()){
				echo "<tr>
						<td>".$number."</td>
						<td>".$row['customer_id']."</td>
						<td>".$row['username']."</td>
						<td>".$row['email']."</td>
						<td>".$row['mobile']."</td>
						<td>".$row['address']."</td>
				</tr>";
					$number++;
				}
				}
				else {
				echo "0 results";
				}
				$con->close();
				?>
			</table>
		</div>
		<p class="text-white text-center text-capitalize">full project completed by kamruzzaman leeon</p>
	</body>
	
</html>