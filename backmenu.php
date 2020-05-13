<?php
	include 'db.php';
	$sql = "SELECT  food_id,`foodname`, `foodtype`, `description`, `price`, `availability` FROM `food`";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		$number=1;
		while($row = $result->fetch_assoc()) {
			
?>
<tr>
	<td><?=$number;?></td>
	<td><?=$row['foodname'];?></td>
	<td><?=$row['foodtype'];?></td>
	<td><?=$row['description'];?></td>
	<td><?=$row['price'];?></td>
	<td><?=$row['availability'];?></td>
	<td><button type="button" class="btn btn-success" data-dismiss="modal" onclick="fooditemSelected(<?=$row['food_id'];?>)">Add</button></td>
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