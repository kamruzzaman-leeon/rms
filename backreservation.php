<?php
require 'db.php';
extract($_POST);
if(isset($_POST['readrecord'])){
	$data = '<table class="table table-bordered table-striped text-center text-dark bg-white">
	<tr>
		<th>No.</th>
		<th>Date</th>
		<th>Person</th>
		<th>Slot</th>
		<th>Status</th>
	</tr>';
	$displayquery="SELECT `date`,`person`,`slot`,`status` FROM `reservation` NATURAL JOIN 'rev' NATURAL JOIN 'customer'";

	$result = mysqli_query($con,$displayquery);
	if(mysqli_num_rows($result) > 0){
		$number = 1;
		while ($row = mysqli_fetch_array($result)){
			$data.='<tr>
			<td>'.$number.'</td>
			<td>'.$row['date'].'</td>
			<td>'.$row['person'].'</td>
			<td>'.$row['slot'].'</td>
			<td>'.$row['status'].'</td>
			</tr>';
			$number++;
		} 
	}
	$data .= '</table>';
	echo "$data";
}
//insert food item
if(isset($_POST['date']) && isset($_POST['person']) && isset($_POST['slot']) && isset($_POST['status'])){
	$query="INSERT INTO `reservation`(`date`, `slot`, `person`, `status`) VALUES ($date','$slot','$person','$status')";
	mysqli_query($con,$query);
}


?>