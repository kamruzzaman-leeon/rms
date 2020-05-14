<?php
require 'db.php';

extract($_POST);
session_start();
$c_id=$_SESSION['customer_id'];

if(isset($_POST['readrecord'])){
	$data = '<table class="table table-bordered table-striped text-center text-dark bg-white">
	<tr>
		<th>No.</th>
		<th>Date</th>
		<th>Person</th>
		<th>Slot</th>
		<th>Status</th>
	</tr>';
	
	$displayquery="SELECT `date`,`person`,`slot`,`status` FROM `reservation` WHERE customer_id=$c_id ";

	$result = mysqli_query($con,$displayquery);
	if(mysqli_num_rows($result) > 0){
		$number = 1;
		while ($row = mysqli_fetch_array($result)){
			$p=$row['status']?'pending':'approve';
			$data.='<tr>
			<td>'.$number.'</td>
			<td>'.$row['date'].'</td>
			<td>'.$row['person'].'</td>
			<td>'.$row['slot'].'</td>
			<td>'.$p.'</td>
			</tr>';
			$number++;
		} 
	}
	$data .= '</table>';
	echo "$data";
}

if(isset($_POST['date']) && isset($_POST['person']) && isset($_POST['slot']) && isset($_POST['status'])){
	//echo "<script>alert('".$_POST['date']."');</script>";
	
	$query="INSERT INTO `reservation`(`customer_id`, `date`, `person`, `slot`) VALUES  ('$c_id','$date','$person','$slot')";
	//mysqli_query($con,$query);
		$result = $con->query($query);
		if($result==true){
			
			//echo "<script>alert('reservation created');</script>";
			//header("Location:index.php");  
			echo '{"details":"created"}';

		}else{

			//echo $conn->error;
			echo '{"details":"error"}';
		}
		
	

}


?>