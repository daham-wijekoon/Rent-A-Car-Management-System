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
    $s_spec=mysqli_real_escape_string($conn, $input["spec_section"]);

     if($input["action"] === 'edit'){
    	$query="UPDATE employee inner join m_team on employee.employee_id = m_team.employee_id SET
        emp_name = '".$e_name."',
        employee.emp_address = '".$e_add."',
        emp_tel='".$e_tel."',
        emp_dob='".$e_dob."',
        emp_nic='".$e_nic."',
        spec_section='".$s_spec."'
    	WHERE m_team.employee_id='".$input["employee_id"]."'
        ";
        mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
    	$query = "
        DELETE m_team, employee from employee inner join m_team on employee.employee_id = m_team.employee_id
        where m_team.employee_id = '".$input["employee_id"]."'";
    	mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>