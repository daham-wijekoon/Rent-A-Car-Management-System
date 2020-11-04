<?php
include("../connect.php");
            session_start();

              $query="SELECT driver.employee_id, employee.emp_name, employee.emp_address, employee.emp_tel, employee.emp_dob, employee.emp_nic, driver.license_no from employee INNER JOIN driver on employee.employee_id = driver.employee_id order by driver.employee_id";
              $result=mysqli_query($conn, $query);
             // $query2="SELECT * FROM employee ";
             // $result2=mysqli_query($conn, $query2);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Driver View</title>

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
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../driver.php'"></i>
  
</div>



  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Driver View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
                <th>Driver ID</th>
                <th>Driver Name</th>
                <th>Address</th>
                <th>Tel.No.</th>
                <th>Date of Birth</th>
                <th>Driver NIC</th>
                <th>Lisence No.</th>
                 
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                  <td>'.$row["employee_id"].'</td>
                  <td>'.$row["emp_name"].'</td>
                  <td>'.$row["emp_address"].'</td>
                  <td>'.$row["emp_tel"].'</td>
                  <td>'.$row["emp_dob"].'</td>
                  <td>'.$row["emp_nic"].'</td>
                  <td>'.$row["license_no"].'</td>
                  
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
      url:'driv_action.php',
      columns:{
        identifier:[0,"employee_id"],
        editable:[[1, 'emp_name'], [2, 'emp_address'], [3, 'emp_tel'], [4, 'emp_dob'], [5, 'emp_nic'],[6, 'license_no']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.employee_id).remove();
        }
      }
    });
  });
</script>