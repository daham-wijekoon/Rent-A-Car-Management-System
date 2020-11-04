<html>
<head>
<title>Vehicles</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
  <!-- Custom styles for this template-->
  <!--link href="css/sb-admin-2.min.css" rel="stylesheet"-->
<link rel ="stylesheet" type="text/css" href="CSS/vehicle.css">
  

</head>
<body >

  <div class="header">
    <div class="logo"><a href="homee.php">Shan<span>CABS</span></a></div>
    <h2>Vehicles</h2>
  </div>

  <div class="p-box"></div>
  
  <form class="my-form" action="php/veh.php" method="POST">
      <div>
        <h2>Registration</h2>
      </div>
        <div class="form">
          <div class ="veh-no">
              <p>Vehicle No:</p>
              <input type="text" name="veh_no" placeholder= "Enter Vehicle no.">
          </div>
          <div class ="veh-class">
              <p>Class:</p>
              <input type="text" name="veh_class" placeholder= "Enter Vehicle Class">
          </div>
          <div class ="brand">
              <p>Brand:</p>
              <input type="text" name="brand" placeholder= "Enter Vehicle Brand">
          </div>
           <div class ="model">
              <p>Model:</p>
              <input type="text" name="model" placeholder= "Enter Vehicle Model">
          </div>
           <div class ="insuarance-no">
              <p>Isuarance No:</p>
              <input type="text" name="insuarance_no" placeholder= "Enter Insuarance No.">
          </div>
           <div class ="seats">
              <p>No.of Seats:</p>
              <input type="number" name="no_of_seats" placeholder= "Enter the No.of Seats">
          </div>
           <div class ="eng-cap">
              <p>Engin Capacity:</p>
              <input type="text" name="eng_cap" placeholder= "Enter the Eng. Capacity">
          </div>
          <div class ="supplier-id">
              <p>Supplier ID:</p>
              <input type="text" name="sup_id" placeholder= "Enter Supplier ID">
          </div>
           <div class ="M-date">
              <p>Maintainance Date:</p>
              <input type="date" name="m_date" placeholder= "Enter Maintainance date">
          </div>
          <div class ="submit" >
              <input type="submit" name="submit" value="Submit">
          </div>
          <div class ="view" action="views/veh_view.php'">
              <input type ="button" name="view" value="View" onclick="window.location='views/veh_view.php'">
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