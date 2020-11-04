<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM reservation";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Reservation View</title>

   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="css/3.3.6.bootstrap.min.css">
  <script src="js/3.3.6.bootstrap.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
   <script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script>
<link rel ="stylesheet" type="text/css" href="css/res_view.css">

</head>
<body background="image/23.jpg">
 
<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../reservation.php'"></i>
  
</div>




  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Reservation View</h3><br />
      
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
                <th>Reservation no.</th>
                <th>Customer Id</th>
                <th>Vehicle No.</th>
                <th>Start Date</th>
                <th>Start Time</th>
                <th>Driver Id</th>  
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                  <td>'.$row["reservation_no"].'</td>
                  <td>'.$row["customer_id"].'</td>
                  <td>'.$row["vehicle_no"].'</td>
                  <td>'.$row["start_date"].'</td>
                  <td>'.$row["start_time"].'</td>
                  <td>'.$row["driver_id"].'</td>
                </tr>
              ';
            }

          ?>
        </tbody>
      </table>
      
    </div>

  </div>
</div>



</body>
</html>

<script>
  $(document).ready(function(){
    $('#editable_table').Tabledit({
      url:'res_action.php',
      columns:{
        identifier:[0,"reservation_no"],
        editable:[[1, 'customer_id'], [2, 'vehicle_no'],  [3, 'start_date'], [4, 'start_time'], [5, 'driver_id']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.reservation_no).remove();
        }
      }
    });
  });
</script>