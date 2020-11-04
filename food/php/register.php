<?php

include("../connect.php");
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pno = $_POST['pno'];
$pword = $_POST['password'];
$cword=$_POST['con-password'];
$image=$_POST['image'];



if( !empty($fname) && !empty($lname) && !empty($email) && !empty($pno) && !empty($pword) && !empty($cword)){

	if ($pword==$cword) {
		$SELECT = "SELECT ID FROM login where ID=? Limit 1";
$INSERT = "INSERT into login (ID, f_name, l_name, email, contact_no, password, profile_image) values(?,?,?,?,?,?,?)";


$stmt=$conn->prepare($SELECT);
$stmt->bind_param("i",$ID);
$stmt->execute();
$stmt->bind_result($ID);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("issssss",$ID,$fname,$lname,$email,$pno,$pword,$image);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../signup.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../signup.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("Passwords don't match");
	window.location.href='../signup.php';
</script>
<?php
	}
}
else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../signup.php';
 </script>
<?php


}






?>