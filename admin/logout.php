<?php
session_unset();
session_start();

if(session_destroy()) {
header("Location: adminlogin.php");
}
?>