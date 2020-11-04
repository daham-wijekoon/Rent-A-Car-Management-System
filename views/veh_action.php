<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");

$input=filter_input_array(INPUT_POST);

 	$v_class=mysqli_real_escape_string($conn, $input["veh_class"]);
    $br=mysqli_real_escape_string($conn, $input["brand"]);
    $mo=mysqli_real_escape_string($conn, $input["model"]);
    $in_no=mysqli_real_escape_string($conn, $input["insuarance_no"]);
    $no_seats=mysqli_real_escape_string($conn, $input["no_of_seats"]);
    $eng_cap=mysqli_real_escape_string($conn, $input["eng_capacity"]);
    $sup_id=mysqli_real_escape_string($conn, $input["supplier_id"]);
    $m_date=mysqli_real_escape_string($conn, $input["maintainance_date"]);
    

     if($input["action"]==='edit'){
    	$query="UPDATE vehicle SET 
        veh_class='".$v_class."',
        brand= '".$br."',
    	model='".$mo."',
    	insuarance_no='".$in_no."',
        no_of_seats='".$no_seats."',
        eng_capacity= '".$eng_cap."',
        supplier_id='".$sup_id."',
        maintainance_date='".$m_date."'
        where vehicle_no = '".$input["vehicle_no"]."'
    	";

    	mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
    	$query = "
    	DELETE from vehicle 
    	where vehicle_no = '".$input["vehicle_no"]."'
    	";
    	mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>