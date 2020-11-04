<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");





   // echo "string";


$input=filter_input_array(INPUT_POST);

  $cus_id=mysqli_real_escape_string($conn, $input["customer_id"]);
    $veh_no=mysqli_real_escape_string($conn, $input["vehicle_no"]);
    $s_date=mysqli_real_escape_string($conn, $input["start_date"]);
    $s_time=mysqli_real_escape_string($conn, $input["start_time"]);
    $driv_id=mysqli_real_escape_string($conn, $input["driver_id"]);

     if($input["action"]==='edit'){


      $query="UPDATE reservation SET customer_id= '".$cus_id."',
      vehicle_no='".$veh_no."',
      start_date='".$s_date."',
      start_time='".$s_time."',
      driver_id='".$driv_id."'
        where reservation_no='".$input["reservation_no"]."'
      ";

      mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
      $query = "
      DELETE from reservation 
      where reservation_no = '".$input["reservation_no"]."'
      ";
      mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>