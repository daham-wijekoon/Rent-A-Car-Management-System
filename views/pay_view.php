<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM payment";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment View</title>

   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="css/3.3.6.bootstrap.min.css">
  <script src="js/3.3.6.bootstrap.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
   <script src="jquery-tabledit-1.2.3/jquery.tableditpayment.js"></script>
<link rel ="stylesheet" type="text/css" href="css/res_view.css">

</head>
<body background="image/23.jpg">
 
<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../payment.php'"></i>
  
</div>




  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Payment View</h3><br />
      
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
                <th>Invoice No.</th>
                <th>End Date</th>
                <th>End Time</th>
                <th>Payment Method</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                  <td>'.$row["invoice_no"].'</td>
                  <td>'.$row["end_date"].'</td>
                  <td>'.$row["end_time"].'</td>
                  <td>'.$row["pay_method"].'</td>
                </tr>
              ';
            }

            if (isset($_POST['data_rows'])){
              echo $_POST['data_rows'];
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
      url:'pay_action.php',
      columns:{
        identifier:[0,"invoice_no"],
        editable:[[1, 'end_date'], [2, 'end_time'],[3, 'pay_method']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.invoice_no).remove();
        }
      }


    });




  });





</script>