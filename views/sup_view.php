<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM supplier";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Supplier View</title>

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
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../supplier.php'"></i>
  
</div>




  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Supplier View</h3><br />
      
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
                <th>Supplier ID</th>
                <th>Address</th>
                <th>Tel.No.</th>
                <th>Supplier Name</th>
                <th>NIC</th>
                
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                  <td>'.$row["supplier_id"].'</td>
                  <td>'.$row["supplier_add"].'</td>
                  <td>'.$row["supplier_tel"].'</td>
                  <td>'.$row["supplier_name"].'</td>
                  <td>'.$row["supplier_nic"].'</td>
                  
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
      url:'sup_action.php',
      columns:{
        identifier:[0,"supplier_id"],
        editable:[[1, 'supplier_add'], [2, 'supplier_tel'],  [4, 'supplier_name'], [5, 'supplier_nic']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.supplier_id).remove();
        }
      }
    });
  });
</script>