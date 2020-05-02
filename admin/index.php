<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: adminlogin.php");
exit(); }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard | East-West Restaurant</title>
	<?php include 'links.php';?>
</head>
<body>
	<p><a href="logout.php">logout</a></p>
</body>
</html>