<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");

$input=filter_input_array(INPUT_POST);

 	$name=mysqli_real_escape_string($conn, $input["name"]);
    $add=mysqli_real_escape_string($conn, $input["address"]);
    $tel=mysqli_real_escape_string($conn, $input["tel_no"]);
    $nic=mysqli_real_escape_string($conn, $input["nic"]);
    

     if($input["action"]==='edit'){
    	$query="UPDATE customer SET 
        name='".$name."',
        address= '".$add."',
    	tel_no='".$tel."',
    	nic='".$nic."'
    	WHERE customer_id='".$input["customer_id"]."'
    	";

    	mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
    	$query = "
    	DELETE from customer 
    	where customer_id = '".$input["customer_id"]."'
    	";
    	mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>