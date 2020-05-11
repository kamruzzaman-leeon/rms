<?php
require 'connection.php';
//adding records
extract($_POST);

if(isset($_POST['readrecord'])){
	$data = '<table class="table table-bordered table-striped text-center">
	<tr>
		<th>No.</th>
		<th>Salesman Name</th>
		<th>Mobile</th>
		<th>Edit Action</th>
		<th>Delete Action</th>
		
	</tr>';
	$displayquery="SELECT * FROM `salesman` ";
	$result = mysqli_query($con,$displayquery);
	if(mysqli_num_rows($result) > 0){
		$number = 1;
		while ($row = mysqli_fetch_array($result)){
			$data.='<tr>
			<td>'.$number.'</td>
			<td>'.$row['salesman_name'].'</td>
			<td>'.$row['mobile'].'</td>
			<td>
			<button onclick="Editsalesman('.$row['salesman_id'].')"
			class="btn btn-warning">Edit</button>
			</td>
			<td>
			<button onclick="Deletesalesman('.$row['salesman_id'].')"
			class="btn btn-danger">Delete</button>
			</td>
			</tr>';
			$number++;
		} 
	}
	$data .= '</table>';
	echo "$data";
}
//insert salesman
if(isset($_POST['salesmanname']) && isset($_POST['mobile'])){
	$query="INSERT INTO `salesman`(`salesman_name`, `mobile`) VALUES ('$salesmanname','$mobile')";
	mysqli_query($con,$query);
}
//delete salesman 
if(isset($_POST['deleteid'])){
	$salesemanid=$_POST['deleteid'];
	$deletequery="DELETE FROM `salesman` WHERE salesman_id='$salesemanid' ";
	mysqli_query($con,$deletequery);
}
// //edit salesman
if(isset($_POST['editid']) && isset($_POST['editid'])!= ""){
	$salesemanid=$_POST['editid'];
	$query= "SELECT * FROM `salesman` WHERE salesman_id = '$salesemanid'";
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
if(isset($_POST['updatehidden_salesman_id'])){

	$updatehidden_salesman_id = $_POST['updatehidden_salesman_id'];
	$updatesalesmanname = $_POST['updatesalesmanname'];
	$updatemobile = $_POST['updatemobile'];


	$query=" UPDATE `salesman` SET `salesman_name`='$updatesalesmanname',`mobile`='$updatemobile' WHERE salesman_id='$updatehidden_salesman_id'";
	mysqli_query($con,$query);
}


?>