<?php
include("../connect.php");
            session_start();

$input=filter_input_array(INPUT_POST);

       $query = "SELECT payment.invoice_no, customer.name, reservation.start_date, reservation.start_time, payment.end_date, payment.end_time FROM payment, customer, reservation WHERE payment.invoice_no = 3 && reservation.reservation_no = 3  && reservation.customer_id = customer.customer_id ";
      $result=mysqli_query($conn, $query);

      //'".$input["invoice_no"]."'
      $query2 = "SELECT reservation.customer_id from reservation INNER JOIN payment on reservation.reservation_no=payment.invoice_no where payment.invoice_no = 1";
      $result2=mysqli_query($conn, $query2);
      $query3 = "SELECT count(customer_id) from reservation where customer_id= 'C1'";
      $result3= mysqli_query($conn, $query3);
     $value2 = mysqli_fetch_assoc($result3);
     // $num=$value2['a'];

?>
<html>
	<head>
		<title>Payment Reciept</title>
		<link rel="stylesheet" type="text/css" href="../css/FullPayment.css">
		<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  		<link rel="stylesheet" href="css/3.3.6.bootstrap.min.css">

		<link rel ="stylesheet" type="text/css" href="css/res_view.css">
	</head>
	<body>

<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='pay_view.php'"></i>  
</div>

		 <div class="p-box"></div>

		  <form class="my-form"  method="POST">
      <div>
        <h2>Reciept</h2>
      </div>
        <div class="form">


          <div class ="inv-no">
              <p>Invoice No: 
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo ''.$row["invoice_no"].'';
            
          ?></p>

          </div>
           <div class ="name">
              <p>Customer name: 
            <?php
              echo ''.$row["name"].'';
          ?></p>

          </div>

           <div class ="start_date">
              <p>Start date: 
            <?php
              echo ''.$row["start_date"].'';
          ?></p>

          </div>
          <div class ="start_time">
              <p>Start Time: 
            <?php
              echo ''.$row["start_time"].'';
          ?></p>
          </div>

          <div class ="end_date">
              <p>End date: 
            <?php
              echo ''.$row["end_date"].'';
          ?></p>

          </div>
          <div class ="end_time">
              <p>End Time: 
            <?php
              echo ''.$row["end_time"].'';
          ?></p>
          </div>

           <div class ="hours">
              <p>hours: 
            <?php
            $date1 = (''.$row["end_date"].'');
            $time1 = (''.$row["end_time"].'');
            $d1 = date('Y-m-d H:i:s', strtotime("$date1 $time1"));
            $dt1 = strtotime("$d1");
             
            $date2 = (''.$row["start_date"].'');
            $time2 = (''.$row["start_time"].'');
            $d2 = date('Y-m-d H:i:s', strtotime("$date2 $time2"));
            $dt2 = strtotime("$d2");

            $diff = abs($dt2 - $dt1);  
            $hours = floor($diff/(60*60));

            echo ''.$hours.'';

            }
          ?></p>
        </div>
        
         <div class ="money">
              <p>Rs. 
              	<?php
              	
              	$example2 = 0;
              	$example = 100;
              	if(isset($_POST['submit'])){
              		$example = $_POST['example'];
              		$example2 = $_POST['example2'];
              		echo ''.$example.'';
              		
              	}
              	else echo ''.$example.'';
              ?> per hour</p>
          </div>

          <div class ="tot">
              <p>Total: Rs.  
            <?php
            $tot = $hours * $example; 
              echo ''.$tot.'';
          ?></p>
          </div> 
 
           <div class ="discount">
              <p>Discount : 
            <?php
            $dis = $tot * $example2; 
              echo ''.$dis.'';
          ?></p>
          </div>

    </form>

	<form class="mini_form" action="" method="POST">
 	     <div class ="mon">
              <p>Amount per hour :  <input type="text" name="example"></p>
          </div>

	      <div class ="submit">
              <input type="submit" name="submit" value="Insert">
          </div>

          <div class ="dis">
              <p>Discount :  <input type="text" name="example2"></p>
          </div>

          <div class ="no">
              <p>number of reservations customer has made : <?php
              
            while ($row=mysqli_fetch_array($result3)) {
              echo ''.$row.'';}
                ?> </p>
          </div>

	</form>



	</body>
</html>
