<?php
include("connect.php");
session_start();

/*$a=$_POST["username"];
$b=$_POST["password"];*/

if(isset($_POST["shan_cabs"])){
	$sql = "SELECT * FROM login where username='".$_POST['username']."'AND password='".$_POST['password']."'";
	$result = mysql_query($conn, $sql);

	if($result){
		if($row = mysqli_fetch_array($result)){
			header("location: home.php");
		}
		else{
			echo "error";
		}
	}
}


?>