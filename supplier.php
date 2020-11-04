<html>
<head>
<title>Suppliers</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
  <!-- Custom styles for this template-->
  <!--link href="css/sb-admin-2.min.css" rel="stylesheet"-->
<link rel ="stylesheet" type="text/css" href="CSS/supplier.css">
  

</head>
<body >

  <div class="header">
    <div class="logo"><a href="homee.php">Shan<span>CABS</span></a></div>
    <h2>Supplier</h2>
  </div>

  <div class="p-box"></div>
     <form class="my-form" action="php/sup.php" method="POST">
      <div>
        <h2>Registration</h2>
      </div>
        <div class="form">
          <div class ="sup-id">
              <p>Id:</p>
              <input type="text" name="sup_id" placeholder= "Enter supplier's Id">
          </div>
          <div class ="sup-add">
              <p>Address:</p>
              <input type="text" name="s_add" placeholder= "Enter supplier's Address">
          </div>
          <div class ="sup-tp">
              <p>Tel.no:</p>
              <input type="text" name="s_tp" placeholder= "Enter supplier's tel.no.">
          </div>
           <div class ="sup-name">
              <p>Name:</p>
              <input type="text" name="s_name" placeholder= "Enter supplier's Name">
          </div>
           <div class ="sup-NIC">
              <p>NIC:</p>
              <input type="text" name="s_nic" placeholder= "Enter supplier's NIC">
          </div>
          <div class ="view" action="views/res_view.php'">
              <input type ="button" name="view" value="View" onclick="window.location='views/sup_view.php'">
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