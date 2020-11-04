<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM vehicle";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Vehicle View</title>

   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="css/3.3.6.bootstrap.min.css" />
  <script src="js/3.3.6.bootstrap.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
  <link rel ="stylesheet" type="text/css" href="css/res_view.css">
   <!--script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script-->
<!--link rel ="stylesheet" type="text/css" href="css/res_view.css"-->

</head>
<body background="image/23.jpg">
 
<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../vehicle.php'"></i>
  
</div>


  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Vehicle View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
               
                <th>Vehicle Id</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Insurance No.</th>
                <th>No. of Seats</th>
                <th>Engine Capacity</th>
                <th>Supplier Id</th>
                <th>Maintainance Date</th>
                 
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                 
                  <td>'.$row["vehicle_no"].'</td>
                  <td>'.$row["veh_class"].'</td>
                  <td>'.$row["brand"].'</td>
                  <td>'.$row["model"].'</td>
                  <td>'.$row["insuarance_no"].'</td>
                  <td>'.$row["no_of_seats"].'</td>
                  <td>'.$row["eng_capacity"].'</td>
                  <td>'.$row["supplier_id"].'</td>
                  <td>'.$row["maintainance_date"].'</td>
                 
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
      url:'veh_action.php',
      columns:{
        identifier:[0,"vehicle_no"],
        editable:[[1, 'veh_class'], [2, 'brand'], [3, 'model'], [4, 'insuarance_no'], [5, 'no_of_seats'], [6, 'eng_capacity'], [7, 'supplier_id'], [8, 'maintainance_date']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.customer_id).remove();
        }
      }
    });
  });
</script>