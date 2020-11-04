<?php

include("connect.php");
session_start();

//$res = $_POST['res_no'];
$customer_id = $_POST['cus_id'];
$vehicle_no = $_POST['vehicle_no'];
$s_date = $_POST['start_date'];
$s_time = $_POST['time'];
$driver_id = $_POST['emp_id'];




if( !empty($customer_id) && !empty($vehicle_no) && !empty($s_date) && !empty($s_time) && !empty($driver_id)){



$SELECT = "SELECT reservation_no FROM reservation where reservation_no=? Limit 1";
$INSERT = "INSERT into reservation (reservation_no, customer_id, vehicle_no, start_date, start_time, driver_id) values(?,?,?,?,?,?)";


$stmt=$conn->prepare($SELECT);
$stmt->bind_param("i",$res);
$stmt->execute();
$stmt->bind_result($res);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("isssss",$res,$customer_id,$vehicle_no,$s_date,$s_time,$driver_id);
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