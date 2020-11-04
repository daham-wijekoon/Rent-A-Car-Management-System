<?php

include("connect.php");
session_start();

$vehicle_no = $_POST['veh_no'];
$veh_class = $_POST['veh_class'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$insuarance_no = $_POST['insuarance_no'];
$seats = $_POST['no_of_seats'];
$eng_capacity=$_POST['eng_cap'];
$supplier_id=$_POST['sup_id'];
$m_date=$_POST['m_date'];

if(!empty($vehicle_no) && !empty($veh_class) && !empty($brand) && !empty($model) && !empty($insuarance_no) && !empty($seats) && !empty($eng_capacity) && !empty($supplier_id) && !empty($m_date)){



$SELECT = "SELECT vehicle_no FROM vehicle where vehicle_no=? Limit 1";
$INSERT = "INSERT Into vehicle (vehicle_no, veh_class, brand, model, insuarance_no, no_of_seats, eng_capacity, supplier_id, maintainance_date) values(?,?,?,?,?,?,?,?,?)";

$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$vehicle_no);
$stmt->execute();
$stmt->bind_result($vehicle_no);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("sssssisss",$vehicle_no,$veh_class,$brand,$model,$insuarance_no,$seats,$eng_capacity,$supplier_id,$m_date);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../vehicle.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../vehicle.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../vehicle.php';
 </script>
<?php


}



?>