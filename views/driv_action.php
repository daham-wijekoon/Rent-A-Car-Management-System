<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");

$input=filter_input_array(INPUT_POST);

    $e_name=mysqli_real_escape_string($conn, $input["emp_name"]);
    $e_add=mysqli_real_escape_string($conn, $input["emp_address"]);
    $e_tel=mysqli_real_escape_string($conn, $input["emp_tel"]);
    $e_dob=mysqli_real_escape_string($conn, $input["emp_dob"]);
    $e_nic=mysqli_real_escape_string($conn, $input["emp_nic"]);
    $d_lic=mysqli_real_escape_string($conn, $input["license_no"]);

     if($input["action"] === 'edit'){
    	$query="UPDATE employee inner join driver on employee.employee_id = driver.employee_id SET
        emp_name = '".$e_name."',
        employee.emp_address = '".$e_add."',
        emp_tel='".$e_tel."',
        emp_dob='".$e_dob."',
        emp_nic='".$e_nic."',
        license_no='".$d_lic."'
    	WHERE driver.employee_id='".$input["employee_id"]."'
        ";
        mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
    	$query = "
        DELETE driver, employee from employee inner join driver on employee.employee_id = driver.employee_id
        where driver.employee_id = '".$input["employee_id"]."'";
    	mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>