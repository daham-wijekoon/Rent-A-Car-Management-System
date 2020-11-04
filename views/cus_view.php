<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM Customer";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Customer View</title>

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
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../customer.php'"></i>
  
</div>


  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Customer View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
               
                <th>Customer Id</th>
                <th>Address</th>
                <th>Tel.No</th>
                <th>Customer Name</th>
                <th>Customer NIC</th>
                 
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                 
                  <td>'.$row["customer_id"].'</td>
                  <td>'.$row["address"].'</td>
                  <td>'.$row["tel_no"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["nic"].'</td>
                 
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
      url:'cus_action.php',
      columns:{
        identifier:[0,"customer_id"],
        editable:[[1, 'address'], [2, 'tel_no'], [3, 'name'], [4, 'nic']]
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