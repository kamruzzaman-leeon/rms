 <!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
                <title>Registration | East-West Restaurant</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/reg.css">
    </head>
    <body>
        <?php
        require('db.php');
        // If form submitted, insert values into the database.
        if (isset($_REQUEST['username'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $mobile=stripslashes($_REQUEST['mobile']);
        $mobile=mysqli_real_escape_string($con,$mobile);
        $address=stripslashes($_REQUEST['address']);
        $address=mysqli_real_escape_string($con,$address);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT INTO `customer`(`username`, `email`, `mobile`, `address`, `password`, `trn_date`)
        VALUES ('$username', '$email','$mobile','$address','$password', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
        echo "<div class='container-fluid bg'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>";
            }
            }
            else{
            ?>
            <div class="container-fluid bg">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        
                        <form name="registration" class="form-conatiner" action="" method="post">
                            <h1 class="text-center">Registration</h1>
                            <div class="form-group text-white">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Username" class="form-control" required >
                            </div>
                            <div class="form-group text-white">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email"class="form-control" required >
                            </div>
                            <div class="form-group text-white">
                                <label>Mobile</label>
                                <input type="mobile" name="mobile" placeholder="Mobile" class="form-control"required>
                            </div>
                            <div class="form-group text-white">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address"class="form-control">
                            </div>
                            <div class="form-group text-white">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password"class="form-control" required >
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" value="Register" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                </div>
            </div>
           <?php } ?>
        </body>
    </html>