<?php

include("connect.php");
session_start();

$employee_id = $_POST['emp_id'];
$emp_name = $_POST['e_name'];
$emp_address = $_POST['e_add'];
$emp_tp = $_POST['e_tel'];
$emp_dob = $_POST['e_dob'];
$emp_nic=$_POST['e_nic'];
$license_no=$_POST['license_no'];

if(!empty($employee_id) && !empty($emp_name) && !empty($emp_address) && !empty($emp_tp) && !empty($emp_dob) && !empty($emp_nic)){



$SELECT = "SELECT emp_id FROM employee where emp_id=? Limit 1";
$INSERT = "INSERT Into employee (employee_id, emp_name, emp_address, emp_tel, emp_dob, emp_nic) values(?,?,?,?,?,?,?)";

$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$employee_id);
$stmt->execute();
$stmt->bind_result($employee_id);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("sssisss",$employee_id,$emp_name,$emp_address,$emp_tp,$emp_dob,$emp_nic,$license_no);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../reservation.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../reservation.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../reservation.php';
 </script>
<?php


}



?>