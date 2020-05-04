<!DOCTYPE html>
<html>
	<head>
		<title>Food Menu | East West Restaurant</title>
		<?php include "links.php" ?>
	</head>
	<body>
		<div class="container">
			<h1 class="text-primary text-uppercase text-center">Food Menu</h1>
			
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Food</button>
			</div>
			<div>
				<h2 class="text-danger">All Records</h2>
				<div id="records_contant"></div>
			</div>
			<!-- The Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Add a food item</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="form-group">
								<label>Food Name</label>
								<input type="text" name="" id="foodname" class="form-control" placeholder="Food Name">
							</div>
							<div class="form-group">
								<label>Food Type</label>
								<input type="text" name="" id="foodtype" class="form-control" placeholder="Food Type">
							</div>
							<div class="form-group">
								<label>Description</label>
								<input type="text" name="" id="description" class="form-control" placeholder="Description">
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="" id="price" class="form-control" placeholder="Price">
							</div>
					
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal" onclick="addRecord()">Save</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!--///////// update modal//////////// -->
			<div class="modal" id="update_food_modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Add a food item</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="form-group">
								<label>Update Food Name</label>
								<input type="text" name="" id="update_foodname" class="form-control" placeholder="Food Name">
							</div>
							<div class="form-group">
								<label>Update Food Type</label>
								<input type="text" name="" id="update_foodtype" class="form-control" placeholder="Food Type">
							</div>
							<div class="form-group">
								<label>Update Description</label>
								<input type="text" name="" id="update_description" class="form-control" placeholder="Description">
							</div>
							<div class="form-group">
								<label>Update Price</label>
								<input type="text" name="" id="update_price" class="form-control" placeholder="Price">
							</div>
					
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal" onclick="UpdateFood()">Save</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<input type="hidden" name="" id="hidden_food_id">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function()
			{
				readRecords(); 
			});
			function readRecords()
			{
				var readrecord ="readrecord";
				$.ajax({
					url:"backfoodmenu.php",
					type:"post",
					data:{
						readrecord:readrecord},
						success:function(data,status){
							$('#records_contant').html(data);
						}
					
				})
			} 
			function addRecord(){
				var foodname =$('#foodname').val();
				var foodtype =$('#foodtype').val();
				var description =$('#description').val();
				var price =$('#price').val();
				$.ajax({
					url:"backfoodmenu.php",
					type:'post',
					data:{
						foodname:foodname,
						foodtype:foodtype,
						description:description,
						price:price,

						},

						success:function(data,status)
						{
							readRecords();
						}
				});
			}
			// delete food record
			function DeleteFood(deleteid){
				var conf= confirm("Are you sure?");
				if(conf==true){
					$.ajax({
						url:"backfoodmenu.php",
						type:"post",
						data:{ deleteid:deleteid },
						success:function(data,status){
							readRecords();
						}
					});
				}
			}

			function EditFood(editid){
				$('#hidden_food_id').val(editid);

				$.post("backfoodmenu.php", {
					editid:editid }
					,function(data,status){
						var food=JSON.parse(data);
						$('#update_foodname').val(food.foodname);
						$('#update_foodtype').val(food.foodtype);
						$('#update_description').val(food.description);
						$('#update_price').val(food.price);
					}
				);
				$('#update_food_modal').modal("show");
			}


			function UpdateFood(){
				var updatefoodname = $('#update_foodname').val();
				var updatefoodtype = $('#update_foodtype').val();
				var updatedescription = $('#update_description').val();
				var updateprice = $('#update_price').val();
				
				var updatehidden_food_id = $('#hidden_food_id').val();

				$.post("backfoodmenu.php",{
					updatehidden_food_id:updatehidden_food_id,
					updatefoodname:updatefoodname,
					updatefoodtype:updatefoodtype,
					updatedescription:updatedescription,
					updateprice:updateprice
				},
				function(data,status){
					$('#update_food_modal').modal("hide");
						readRecords();
					}

				);
			}

		

		</script>
	</body>
</html>