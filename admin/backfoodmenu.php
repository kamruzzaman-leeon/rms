<?php
require 'connection.php';
//adding records
extract($_POST);

if(isset($_POST['readrecord'])){
	$data = '<table class="table table-bordered table-striped text-center">
	<tr>
		<th>No.</th>
		<th>Food Name</th>
		<th>Food type</th>
		<th>Description</th>
		<th>Price</th>
		<th>Availability</th>
		<th>Edit Action</th>
		<th>Delete Action</th>
		
	</tr>';
	$displayquery=" SELECT * FROM `food` ";
	$result = mysqli_query($con,$displayquery);
	if(mysqli_num_rows($result) > 0){
		$number = 1;
		while ($row = mysqli_fetch_array($result)){
			$data.='<tr>
			<td>'.$number.'</td>
			<td>'.$row['foodname'].'</td>
			<td>'.$row['foodtype'].'</td>
			<td>'.$row['description'].'</td>
			<td>'.$row['price'].'</td>
			<td>'.$row['availability'].'</td>
			<td>
			<button onclick="EditFood('.$row['food_id'].')"
			class="btn btn-warning">Edit</button>
			</td>
			<td>
			<button onclick="DeleteFood('.$row['food_id'].')"
			class="btn btn-danger">Delete</button>
			</td>
			</tr>';
			$number++;
		} 
	}
	$data .= '</table>';
	echo "$data";
}
//insert food item
if(isset($_POST['foodname']) && isset($_POST['foodtype']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['availability'])){
	$query="INSERT INTO `food`(`foodname`, `foodtype`, `description`, `price`,`availability`) VALUES ('$foodname','$foodtype','$description','$price','$availability')";
	mysqli_query($con,$query);
}
//delete food item 
if(isset($_POST['deleteid'])){
	$foodid=$_POST['deleteid'];
	$deletequery="DELETE FROM `food` WHERE food_id='$foodid' ";
	mysqli_query($con,$deletequery);
}
//edit food
if(isset($_POST['editid']) && isset($_POST['editid'])!= ""){
	$foodid=$_POST['editid'];
	$query= "SELECT * FROM `food` WHERE food_id = '$foodid'";
	if(!$result=mysqli_query($con,$query)){
		exit(mysqli_error());
	}

	$response=array();

	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_assoc($result)) {
			$response=$row;
		}
	}else{
		$response['status']=200;
		$response['message']="Data not found!";
	}
	echo json_encode($response);
}
else{
	$response['status']=200;
	$response['message']="Invalid Request!";
}

//update table
if(isset($_POST['updatehidden_food_id'])){

	$updatehidden_food_id = $_POST['updatehidden_food_id'];
	$updatefoodname = $_POST['updatefoodname'];
	$updatefoodtype = $_POST['updatefoodtype'];
	$updatedescription = $_POST['updatedescription'];
	$updateprice = $_POST['updateprice'];
	$updateavailability=$_POST['updateavailability'];

	$query=" UPDATE `food` SET `foodname`='$updatefoodname',`foodtype`='$updatefoodtype',`description`='$updatedescription',`price`='$updateprice' ,`availability`='$updateavailability' WHERE food_id='$updatehidden_food_id'";
	mysqli_query($con,$query);
}


?>