<?php

include("../connect.php");
session_start();

if (isset($_POST['submit'])) {
	


$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * from login where email = '".$username."' and password = '".$password."'";

$result=mysqli_query($conn, $query);
if ($result) {
	while ($row = mysqli_fetch_array($result)) {
		echo '<script type="text/javascript">alert("You are successfully loged in")</script>';
	}

	if (mysqli_num_rows($result)>0) {
		$_SESSION['username']=$username;
		?>
		<script type="text/javascript">
			window.location.href="../profile.php";
		</script>

		<?php

	}else{
		?>

		<script type="text/javascript">
			alert("username or password is wrong")
			window.location.href="../index.php"
		</script>
		<?php
	}

}

}

?>