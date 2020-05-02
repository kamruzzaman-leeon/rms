<?php
session_unset();
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>