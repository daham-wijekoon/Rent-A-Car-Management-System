<?php

include("connect.php");
session_start();

$sup_id = $_POST['sup_id'];
$sup_add = $_POST['s_add'];
$sup_tel = $_POST['s_tp'];
$sup_name = $_POST['s_name'];
$sup_nic = $_POST['s_nic'];


if(!empty($sup_id) && !empty($sup_add) && !empty($sup_tel) && !empty($sup_name) && !empty($sup_nic)){



$SELECT = "SELECT supplier_id FROM supplier where supplier_id=? Limit 1";
$INSERT = "INSERT Into supplier (supplier_id, supplier_add, supplier_tel, supplier_name, supplier_nic) values(?,?,?,?,?)";

$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$supplier_id);
$stmt->execute();
$stmt->bind_result($supplier_id);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("ssiss",$sup_id,$sup_add,$sup_tel,$sup_name,$sup_nic);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../supplier.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../supplier.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../supplier.php';
 </script>
<?php


}



?>