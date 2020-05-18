<?php
include 'db.php';
session_start();
$c=$_SESSION['customer_id'];
$sql="SELECT  `username`, `email`, `mobile`, `address`, `password` FROM `customer` ";
$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {			
?>

		<tr>
			<td><?=$row['username'];?></td>
			<td><?=$row['email'];?></td>
			<td><?=$row['mobile'];?></td>
			<td><?=$row['address'];?></td>
			<td><?=$row['password'];?></td>
			<td>Update</td>
		</tr>
		<?php
	}mysqli_close($con);
