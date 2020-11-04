<?php

include("connect.php");
session_start();

$invoice_no = $_POST['inv_no'];
//$c_name = $_POST['cus_name'];
//$amount = $_POST['amount'];
$e_date = $_POST['end_date'];
$e_time = $_POST['time'];
//$total = $_POST['total'];
//$discount=$_POST['discount'];
$p_method=$_POST['pay_method'];

if(!empty($invoice_no) && !empty($e_date) && !empty($e_time) && !empty($p_method)){



$SELECT = "SELECT invoice_no FROM payment where invoice_no=? Limit 1";
//$SELECT2 = "SELECT customer.name as cus_name FROM payment, reservation, customer WHERE payment.invoice_no = reservation.reservation_no && reservation.customer_id = customer.customer_id";
//$INSERT = "INSERT Into payment (invoice_no, cus_name, end_date, end_time, total, discount, full_amount, pay_method) values(?,?,?,?,?,?,?,?)";
$INSERT = "INSERT Into payment (invoice_no, end_date, end_time, pay_method) values(?,?,?,?)";

$stmt=$conn->prepare($SELECT);
$stmt->bind_param("i",$invoice_no);
$stmt->execute();
$stmt->bind_result($invoice_no);
$stmt->store_result();
$rnum=$stmt->num_rows;


if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("isss",$invoice_no,$e_date,$e_time,$p_method);
	//$stmt->bind_param("isssiiis",$invoice_no,$c_name,$e_date,$e_time,$total,$discount,$amount,$p_method);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../payment.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Invoice No");
	window.location.href='../payment.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../payment.php';
 </script>
<?php


}



?>