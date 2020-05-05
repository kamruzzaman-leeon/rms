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
//delete food item 
// if(isset($_POST['deleteid'])){
// 	$foodid=$_POST['deleteid'];
// 	$deletequery="DELETE FROM `food` WHERE food_id='$foodid' ";
// 	mysqli_query($con,$deletequery);
// }
// //edit food
// if(isset($_POST['editid']) && isset($_POST['editid'])!= ""){
// 	$foodid=$_POST['editid'];
// 	$query= "SELECT * FROM `food` WHERE food_id = '$foodid'";
// 	if(!$result=mysqli_query($con,$query)){
// 		exit(mysqli_error());
// 	}

// 	$response=array();

// 	if(mysqli_num_rows($result)>0){
// 		while ($row=mysqli_fetch_assoc($result)) {
// 			$response=$row;
// 		}
// 	}else{
// 		$response['status']=200;
// 		$response['message']="Data not found!";
// 	}
// 	echo json_encode($response);
// }
// else{
// 	$response['status']=200;
// 	$response['message']="Invalid Request!";
// }

// //update table
// if(isset($_POST['updatehidden_food_id'])){

// 	$updatehidden_food_id = $_POST['updatehidden_food_id'];
// 	$updatefoodname = $_POST['updatefoodname'];
// 	$updatefoodtype = $_POST['updatefoodtype'];
// 	$updatedescription = $_POST['updatedescription'];
// 	$updateprice = $_POST['updateprice'];
// 	$updateavailability=$_POST['updateavailability'];

// 	$query=" UPDATE `food` SET `foodname`='$updatefoodname',`foodtype`='$updatefoodtype',`description`='$updatedescription',`price`='$updateprice' ,`availability`='$updateavailability' WHERE food_id='$updatehidden_food_id'";
// 	mysqli_query($con,$query);
// }


?>