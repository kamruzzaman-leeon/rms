<!DOCTYPE html>
<html>
	<head>
		<title>salesman | East West Restaurant</title>
		<?php include "links.php" ?>
	</head>
	<body>
		<div class="container">
			<h1 class="text-primary text-uppercase text-center">Salesman</h1>
			
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Salesman</button>
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
							<h4 class="modal-title">Add a Salesman</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="form-group">
								<label>Salesman Name</label>
								<input type="text" name="" id="salesmanname" class="form-control" placeholder="salesman Name">
							</div>
							<div class="form-group">
								<label>Mobile</label>
								<input type="text" name="" id="mobile" class="form-control" placeholder="mobile">
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

<!-- <p class="text-white text-center text-capitalize">full project completed by kamruzzaman leeon</p> -->
			<!--///////// update modal//////////// -->
			<div class="modal" id="update_salesman_modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Add a Salesman</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="form-group">
								<label>Update Salesman Name</label>
								<input type="text" name="" id="update_salesmanname" class="form-control" placeholder="salesman Name">
							</div>
							<div class="form-group">
								<label>Update Mobile</label>
								<input type="text" name="" id="update_mobile" class="form-control" placeholder="salesman mobile">
							</div>
							
					
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal" onclick="Updatesalesman()">Save</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<input type="hidden" name="" id="hidden_salesman_id">
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
					url:"backsalesman.php",
					type:"post",
					data:{
						readrecord:readrecord},
						success:function(data,status){
							$('#records_contant').html(data);
						}
					
				})
			} 
			function addRecord(){
				var salesmanname = $('#salesmanname').val();
				var mobile = $('#mobile').val();
				$.ajax({
					url:"backsalesman.php",
					type:'post',
					data:{
						salesmanname:salesmanname,
						mobile:mobile
						
						},

						success:function(data,status)
						{
							readRecords();
						}
				});
			}
			// delete salesman record
			function Deletesalesman(deleteid){
				var conf= confirm("Are you sure?");
				if(conf==true){
					$.ajax({
						url:"backsalesman.php",
						type:"post",
						data:{ deleteid:deleteid },
						success:function(data,status){
							readRecords();
						}
					});
				}
			}

			function Editsalesman(editid){
				$('#hidden_salesman_id').val(editid);

				$.post("backsalesman.php", {
					editid:editid }
					,function(data,status){
						var salesman=JSON.parse(data);
						$('#update_salesmanname').val(salesman.salesman_name);
						$('#update_mobile').val(salesman.mobile);
					}
				);
				$('#update_salesman_modal').modal("show");
			}


			function Updatesalesman(){
				var updatesalesmanname = $('#update_salesmanname').val();
				var updatemobile = $('#update_mobile').val();
				var updatehidden_salesman_id = $('#hidden_salesman_id').val();

				$.post("backsalesman.php",{
					updatehidden_salesman_id:updatehidden_salesman_id,
					updatesalesmanname:updatesalesmanname,
					updatemobile:updatemobile
				},
				function(data,status){
					$('#update_salesman_modal').modal("hide");
						readRecords();
					}

				);
			}

		

		</script>
	</body>
</html>