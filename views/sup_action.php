<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");





   // echo "string";


$input=filter_input_array(INPUT_POST);


    $sup_add=mysqli_real_escape_string($conn, $input["supplier_add"]);
    $s_tel=mysqli_real_escape_string($conn, $input["supplier_tel"]);
    $s_name=mysqli_real_escape_string($conn, $input["supplier_name"]);
    $s_nic=mysqli_real_escape_string($conn, $input["supplier_nic"]);

     if($input["action"]==='edit'){


      $query="UPDATE supplier SET supplier_add= '".$sup_add."',
      supplier_tel='".$s_tel."',
      supplier_name='".$s_name."',
      supplier_nic='".$s_nic."'
      
        where supplier_id='".$input["supplier_id"]."'
      ";

      mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
      $query = "
      DELETE from supplier 
      where supplier_id = '".$input["supplier_id"]."'
      ";
      mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>