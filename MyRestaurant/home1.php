<?php
include("connect.php");
session_start();



$input=filter_input_array(INPUT_POST);

$query="SELECT fname, lname, email, contact_no, password from reg_customer where email = '".$_SESSION['email']."'";
$result=mysqli_query($conn, $query);


?>
<html>
<head>
	<title>Customer</title>
	  <link href="css/style2.css" rel="stylesheet">
  	<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
      
//fetch the coordinates

      x = navigator.geolocation;
      x.getCurrentPosition(success, failure);

      function success(position){
        var mylat = position.coords.latitude
        var mylong = position.coords.longitude

        //google-api latitude and longitude
        var coords = new google.maps.LatLng(mylat, mylong);

        //setting google map
        var mapOptions = {
          zoom:16,
          center:coords,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        }

        //creating a map
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var marker = new google.maps.Marker({map: map,position: coords});

      }
      function failure(){
        $('body').append("<p>It didn't work, co-ordinates not available!</p>");
      }

    </script>

    <style type="text/css">
      #map{
        width:500px;
        height: 400px;
        top:50px;
        left:300px;
        }

    </style>
</head>
<body>

  <div class="navi">
    <img src="img/logo1.png" class="logo" align="left">
    <h2>Search <input type="text" name="search" placeholder="Search"><button class="btn"><i class="fa fa-search"></i></button><select><option>Select</option value="1"><option>Restaurant</option><option value="2">Short-Eats</option><option value="3">Dessert</option></select></h2>
    <ul class="drop">
      <li><img src="img/2.png"></li>
      <li class="d"><a href="#" onclick="myFunction()" class="dropbtn"><?php while($row=mysqli_fetch_array($result)){ echo ''.$row["fname"].' '.$row["lname"].'';?></a>
          <ul class="dropdown1" id="dropdown1">
            <li><a href="#" id="my">My Profile</a></li>
            <li><a href="login.php">Log out</a></li>
          </ul>
        </li>

    </ul>
  </div>

	<div class="popup4">
      <div class="popup-content4">
      <form class="form1" action="views/cus_action.php?ID=<?php echo $row['ID']; ?>" method="POST">
        <img src="img/close.png" alt="close" class="close">
          <div class="container">
   
  
      <h2 align="center">My Profile</h2><br />

   <div class = "fn">
    <label>First Name : <input type="text" name="fname" placeholder="First Name" value="<?php echo ''.$row["fname"].'';?>"></label>
  

  
    <label>Last Name : <input type="text" name="lname" placeholder="Last Name" value="<?php echo ''.$row["lname"].'';?>"></label>


    <label>Email : <input type="text" name="email" placeholder="Email" value="<?php echo ''.$row["email"].'';?>"></label>

    <Label>Password :  <input type="text" name="password" placeholder="Password" value="<?php echo ''.$row["password"].'';?>"></Label>

    <label>Contact Number : </label> <input type="text" name="contact_no" placeholder="Contact No." value="<?php echo ''.$row["contact_no"].''; ?>"><?php }?>
  </div>

        <br>
        <center><button type="submit" class="butn_update" name="butn_update" id="butn_update" ><strong>Update</strong></button></center>


  </div>
         </form>
      </div>
       </div> 

<br>
<section class="location">
	<form>
    <div class="ama"><h2>My Location</h2></div>
    <div id="map"></div>
    <div id="lat"></div>
    <div id="long"></div>
	</form>
</section>


<section>



<?php $qu="SELECT * from des, reg_merchant where reg_merchant.shop_name=des.shop_name";
	$res_qu=mysqli_query($conn, $qu);?>

  
<?php while($row=mysqli_fetch_array($res_qu)){ ?>




  		<div class="intro">
  		
  		<div class="intro_img">
  			
  			<center><h3><?php echo ''.$row["shop_name"].' '?></h3></center>
  			<div class="intro_i">
  			<?php echo "<img src='img/".$row['image1']."' width='300px' height='200px'>";?></div><br>
		</div>
		<div class="intro_des">
			Address : <?php echo ''.$row["address"].''?><br>Owner : <?php echo ''.$row["fname"].' '.$row["lname"].''?><br> Category : <?php echo ''.$row["cat"].''?><br> <br>


	<?php 


	$myVariable=''.$row["email"].'';

	 ?>		

<form method="post" action="home2.php">
			<input type="hidden" name="email" value="<?php echo ''.$myVariable.'' ?>">
			<input type="submit" name="tt" class="ttc" value="More Details"/> <?php ?>
		
</form>
    	</div>
    	
		
	</div>	
    	
		<?php }?>

  



</section>

</body>
</html>

<script>

function myFunction() {
  document.getElementById("dropdown1").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

    document.getElementById("my").addEventListener("click", function(){
      document.querySelector(".popup4").style.display = "flex";
    })

        document.querySelector(".close").addEventListener("click", function(){
      document.querySelector(".popup4").style.display = "none";
    })

	

</script>