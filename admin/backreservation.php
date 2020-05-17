<?php
	include 'connection.php';
	$sql = "SELECT * FROM reservation NATURAL JOIN customer";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		$number=1;
		while($row = $result->fetch_assoc()) {
			
?>		
		<tr>
			<td><?=$number;?></td>
			<td><?=$row['username'];?></td>
			<td><?=$row['email'];?></td>
			<td><?=$row['mobile'];?></td>
			<td><?=$row['date'];?></td>
			<td><?=$row['person'];?></td>
			<td><?=$row['slot'];?></td>
			<td><?=$row['status']?'pending':'approve'?></td>
			<td><button type="button" class="btn btn-<?=$row['status']?'success':'disable'?> " data-dismiss="modal" onclick="change(<?=$row['reservation_id'];?>)">approve</button></td>
		</tr>
		
<?php	
$number++;
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($con);
?>