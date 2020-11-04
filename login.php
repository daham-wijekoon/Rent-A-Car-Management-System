
<?php
/*
$host="localhost";
$user="root";
$password="";
$db="shancabs";

mysqli_connect($host,$user,$password);
mysql_select_db($db);


//include("connect.php");
//session_start();

		

if (isset($_POST['username'])) {
		$a=$_POST['username'];
		$b=$_POST['password'];	
	 

	$sql="select * from login where user='".$a."' AND pass='".$b."' limit 1";

  

	$result=mysql_query($sql);
  	
	
		if (mysql_num_rows($result)==1) {
			header("location: home.php");
		}
		else{
			echo "error";
		}


	
}*/

if (isset($_POST['submit'])) {
	$user=$_POST['username'];
	$pass=$_POST['password'];

	if($user=="daham" && $pass=="dinethra"){
		header("location: homee.php");
	}
	else{
		echo ("access denied");
	}
}

?>

<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
	<div class="main-title">
		<h1>ShanCABs</h1> 
	</div>
	<div class ="loginbox">
	<img src = "image/7.jpg" class ="key">
	<h2>Log in here</h2>
	<form method="post" action="">
		<p>User Name</p>
		<input type="text" name="username" placeholder= "Enter Username">
		<p>Password</p>
		<input type="password" name="password" placeholder= "Enter Password"><br><br>
		<input type="submit" name="submit" value="login">

	</form>
</div>
	<footer class="main-footer">
		<p>shanCABS &copy 2019</p>
	</footer>

</body>
	
	

</html>