<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");





   // echo "string";
 

 $input=filter_input_array(INPUT_POST);


    $e_date=mysqli_real_escape_string($conn, $input["end_date"]);
    $e_time=mysqli_real_escape_string($conn, $input["end_time"]);
    $p_method=mysqli_real_escape_string($conn, $input["pay_method"]);



     if($input["action"]==='edit'){


      $query="UPDATE payment SET 
      end_date='".$e_date."',
      end_time='".$e_time."',
      pay_method='".$p_method."'
        where invoice_no='".$input["invoice_no"]."'
      ";

      mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
      $query = "
      DELETE from payment 
      where invoice_no = '".$input["invoice_no"]."'
      ";
      mysqli_query($conn, $query);

    }

    if($input["action"] === 'print'){
      $query = "
      SELECT payment.invoice_no, customer.name, reservation.start_date, reservation.start_time, payment.end_date, payment.end_time from payment, customer, reservation where payment.invoice_no = '".$input["invoice_no"]."' && reservation.reservation_no = '".$input["invoice_no"]."' && reservation.customer_id = customer.customer_id ";
      mysqli_query($conn, $query);
    }

echo json_encode($input); 
    

?>