<?php
$conn=mysqli_connect("localhost","root","","food");

if (!$conn) {
	die("Connection Fail: " .mysqli_connect_error());	
}
?>