<!DOCTYPE html>
<html>
	<head>
		<title>Order| East West Restaurant</title>
		<?php include "links.php" ?>
	</head>
	<body>
		<div class="container">
			<h1 class="text-white bg-dark text-uppercase text-center">Order</h1>
			<table class="table table-bordered table-striped text-center table-sm">
					<tr>
						<th>No.</th>
						<th>Order ID</th>
						<th>Customer ID</th>
						<th>Food ID</th>
						<th>Quantity</th>
					</tr>
				<?php include 'connection.php';
				$sql="SELECT`food_id`, `quantity`, `orders_id`, `u_id` FROM `orderitem`";
				$result=$con->query($sql);
				if ($result->num_rows > 0) {
				$number=1;
				while ($row=$result->fetch_assoc()) {
					echo"<tr>
							<td>".$number."</td>
							<td>".$row['orders_id']."</td>
							<td>".$row['u_id']."</td>
							<td>".$row['food_id']."</td>
							<td>".$row['quantity']."</td>
							</tr>";
							$number++;
				}
			}
			else{
				echo "0 results";
				}
				$con->close();
				?>
			</table>
		</div>
	</body>
	
</html>
