<html>
<head>
<title>Maintainance Team</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
  <!-- Custom styles for this template-->
  <!--link href="css/sb-admin-2.min.css" rel="stylesheet"-->
<link rel ="stylesheet" type="text/css" href="CSS/maintain.css">
  

</head>
<body >

  <div class="header">
    <div class="logo"><a href="homee.php">Shan<span>CABS</span></a></div>
    <h2>Maintainance Team</h2>
  </div>

  <div class="p-box"></div>
    <form class="my-form" action="php/main.php" method="POST">
      <div class="heading">
        <h2>Registration</h2>
      </div>
        <div class="form">
          <div class ="emp-id">
              <p>Employee ID:</p>
              <input type="text" name="emp_id" placeholder= "Enter Employee ID">
          </div>
          <div class ="emp-add">
              <p>Address:</p>
              <input type="text" name="e_add" placeholder= "Enter Employee's Address">
          </div>
          <div class ="emp-tp">
              <p>Tel.No:</p>
              <input type="text" name="e_tel" placeholder= "Enter Employee's Tel.no.">
          </div>
           <div class ="emp-name">
              <p>Name:</p>
              <input type="text" name="e_name" placeholder= "Enter Employee's Name">
          </div>
           <div class ="sp-section">
              <p>Spcialized Section:</p>
              <input type="text" name="sp_section" placeholder= "Enter Specialized Section">
          </div>
           <div class ="emp-DOB">
              <p>Date Of Birth:</p>
              <input type="date" name="e_dob" placeholder= "Enter Employee's DOB">
          </div>
           <div class ="emp-nic">
              <p>Maintainer NIC:</p>
              <input type="text" name="e_nic" placeholder= "Enter Maintainer's NIC">
          </div>
           <div class ="view" action="views/maint_view.php'">
              <input type ="button" name="view" value="View" onclick="window.location='views/maint_view.php'">
          </div>
          <div class ="submit">
              <input type="submit" name="submit" value="Submit">
          </div>
          <div class ="clear">
              <input type="reset" name="clear" value="Clear all">
          </div>
        </div>
    </form>
  
  <div class="image1">
    <img src="image/1.jpg">
  </div>
  
  
  <!-- Page Wrapper -->
  <div id="wrapper">
    <nav>

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="reservation.php" >
          <i class="fa fa-taxi"></i>
          <span>Reservations</span>
        </a>
      </li>
    
  

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="customer.php" >
          <i class="fa fa-user-circle"></i>
          <span>Customers</span>
        </a>
      </li>
    
    

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-users"></i>
          <span>Employees</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="driver.php">
              <i class="fas fa-id-badge"></i>  Drivers</a>

            <a class="collapse-item" href="maintain.php">
             <i class="fas fa-fw fa-wrench"></i> Maintanance Team</a>
          </div>
        </div>
      </li>

    
    
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="vehicle.php">
          <i class="fa fa-car"></i>
          <span>Vehicles</span></a>
      </li>
    
    

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="payment.php">
          <i class="fa fa-credit-card"></i>
          <span>Payment</span></a>
      </li>
    
    
          <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="supplier.php">
          <i class="fa fa-user-circle"></i>
          <span>Suppliers</span></a>
      </li>
    </ul>
    </nav>
  </div>

  

  <div class="clr"></div>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>