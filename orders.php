<?php include 'auth.php'?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>East-West Restaurant | Home</title>
		<?php include'common/header.php';?>
		<!-- echo "<script>console.log(".$_SESSION['customer_id'].");</script>"; -->
	</head>
	
	<body>
		<div>

			<header>
				<!-- header part -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="index.php">
						<img class="toplogo" src="img/East-West.png" alt="nav-logo">
					</a>
					<!-- navbar toggle or mobile button -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="reservation.php"><i class="fa fa-calendar-check-o"></i> Reservation</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="menu.php"><i class="fa fa-list-alt"></i> Menu<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['username'];?> </a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="edit.php"><i class="fas fa-edit"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="fas fa-cookie-bite"></i> Order</a>
									<div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./cartDispaly.php" ><i class="fa fa-cart-plus"></i> <spam id="cart">Cart</spam></a>
								
							</li>
							
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search food" aria-label="Search">
							<button class="btn btn-outline-info my-2 my-sm-0" type="submit"><span class="colorchange">Search</span></button>
						</form>
					</div>
				</nav>
			</header>
		</div>
			<br>
			
			<div class="container">
				<h1 class="text-white bg-dark text-uppercase text-center">your orders</h1>
				
                        <?php 
                        include 'db.php';
                      
                        function fetch_data($sql) {
                            $result = $GLOBALS['con']->query($sql);
                            if ($result->num_rows > 0) {
                                $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
                                return $data;
                            }else{
                              echo $GLOBALS['con']->error;
                              return  array( );
                            }
                          }

                        $sql ="SELECT * FROM `orderstable` WHERE u_id='".$_SESSION['customer_id']."' ORDER BY id DESC";
                        $data=fetch_data($sql);
                      
                        for ($i=0; $i < count($data); $i++) { 
                        ?>

                        <div class="containser">


                            <div class ='jumbotron'>
                            <h5>order id : <?=$data[$i]['id']?></h5>
                                <table class="table table-bordered table-striped text-center table-hover table-sm">
                                <thead>
                                <th>
                                <td>name</td>
                                <td>quantity</td>
                                <td>price</td>
                                </th>
                                </thead>
                                    <tbody>
                                    <?php
                                    $sql="SELECT * FROM `orderitem` WHERE orders_id='".$data[$i]['id']."' ";

                                    $orders_items=fetch_data($sql);

                                    for ($j=0; $j < count($orders_items); $j++) {
                                        
                                        $sql="SELECT foodname FROM `food` WHERE food_id=".$orders_items[$j]['food_id'];
                                        $food_name=fetch_data($sql)[0]['foodname'];
                                    ?>

                                        <tr>
                                            <td></td>
                                            <td><?=$food_name;?></td>
                                            <td><?=$orders_items[$j]['quantity'];?></td>
                                            <td><?=$orders_items[$j]['price'];?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>

                                </table>
                            
                            
                            </div>
                        </div>
                           
                        
                        <?php }?>
                        
				
            
			</div>
		
		<?php include'common/footer.php'; ?>
		<script>
		
		
		function loadDATA() {
			$.ajax({
		url: "backmenu.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#table').html(data);
		}
		});
		}
		function fooditemSelected(id) {
			console.log(id);
					$.ajax({
				url: "cart.php",
				type: "POST",
				data:{
					addtoCart:true,
					id:id
				},
				cache: false,
				success: function(data){
					//console.log(data);
					//loadtotalItem();
					alert("ths item has been added")
					AllFoodsItms();
					//GetTotalPrice();
					
				}
				});
		}

	
		//loadDATA();
		AllFoodsItms();

		function loadtotalItem(){


			$.ajax({
				url: "cart.php",
				type: "POST",
				data:{
					countFooditem:true
				
				},
				cache: false,
				success: function(data){
					console.log(data);
					
				}
				});

		}
			function AllFoodsItms(){


			$.ajax({
			url: "cart.php",
			type: "POST",
			data:{
			allFooditems:true

			},
			cache: false,
			success: function(data){
			console.log(data);
			$('#cart').html("Cart "+data);

			}
			});

			}
			function GetTotalPrice(){


				$.ajax({
				url: "cart.php",
				type: "POST",
				data:{
					totalPrice:true

				},
				cache: false,
				success: function(data){
					
				console.log(data);

				}
				});

				}

		



		</script>
		
	</body>
</html>