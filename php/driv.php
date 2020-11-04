<?php

include("connect.php");
session_start();

$employee_id = $_POST['emp_id'];
$emp_name=$_POST['e_name'];
$emp_add=$_POST['e_add'];
$emp_tel=$_POST['e_tel'];
$emp_dob=$_POST['e_dob'];
$emp_nic=$_POST['e_nic'];
$license_no=$_POST['license_no'];


if(!empty($employee_id) && !empty($license_no) && !empty($emp_name) && !empty($emp_add) && !empty($emp_tel) && !empty($emp_dob) && !empty($emp_nic)) {



$SELECT = "SELECT employee_id FROM driver where employee_id=? Limit 1";
$INSERT1= "INSERT Into employee (employee_id,emp_name, emp_address,emp_tel,emp_dob,emp_nic) values(?,?,?,?,?,?)";
$INSERT2 = "INSERT Into driver (employee_id,license_no) values(?,?)";


$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$employee_id);
$stmt->execute();
$stmt->bind_result($employee_id);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT1);
	$stmt->bind_param("sssiss",$employee_id,$emp_name,$emp_add,$emp_tel,$emp_dob,$emp_nic);
	$stmt->execute();
	$stmt=$conn->prepare($INSERT2);
	$stmt->bind_param("si",$employee_id,$license_no);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../driver.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../driver.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../driver.php';
 </script>
<?php


}



?>