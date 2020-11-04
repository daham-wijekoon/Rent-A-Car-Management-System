<?php

include("connect.php");
session_start();

$id = $_POST['cus_id'];
$add = $_POST['c_add'];
$tp = $_POST['c_tp'];
$name = $_POST['c_name'];
$nic = $_POST['c_nic'];

if(!empty($id) && !empty($add) && !empty($tp) && !empty($name) && !empty($nic)){

$SELECT = "SELECT customer_id FROM customer where customer_id=? Limit 1";
$INSERT = "INSERT Into customer (customer_id, address, tel_no, name, nic) values(?,?,?,?,?)";

$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$id);
$stmt->execute();
$stmt->bind_result($id);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("ssiss",$id,$add,$tp,$name,$nic);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully")
window.location.href='../customer.php';
 </script>

<?php

}else{
	?>
<script> alert ("Someone already registered with this Customer Id") 
window.location.href='../customer.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required") 
window.location.href='../customer.php';
</script>

<?php


}

?>