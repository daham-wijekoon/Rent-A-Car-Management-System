
<?php

include("connect.php");
            session_start();

                  $query1="SELECT count(driver_id) as a from reservation where driver_id = 'D1'";
                  $result1=mysqli_query($conn, $query1);
                  $value1=mysqli_fetch_assoc($result1);
                  $num1=$value1['a'];

                  $query2="SELECT count(driver_id) as b from reservation where driver_id = 'D2'";
                  $result2=mysqli_query($conn, $query2);
                  $value2=mysqli_fetch_assoc($result2);
                  $num2=$value2['b'];

                  $query3="SELECT count(driver_id) as c from reservation where driver_id = 'D3'";
                  $result3=mysqli_query($conn, $query3);
                  $value3=mysqli_fetch_assoc($result3);
                  $num3=$value3['c'];

                  $query4="SELECT count(driver_id) as d from reservation where driver_id = 'D4'";
                  $result4=mysqli_query($conn, $query4);              
                  $value4=mysqli_fetch_assoc($result4);
                  $num4=$value4['d'];

                  $query9="SELECT count(driver_id) as e from reservation where driver_id = 'D5'";
                  $result9=mysqli_query($conn, $query9);              
                  $value9=mysqli_fetch_assoc($result9);
                  $num9=$value9['e'];

                  $query10="SELECT count(driver_id) as f from reservation where driver_id = 'D6'";
                  $result10=mysqli_query($conn, $query10);              
                  $value10=mysqli_fetch_assoc($result10);
                  $num10=$value10['f'];

                  $query11="SELECT count(driver_id) as g from reservation where driver_id = 'D7'";
                  $result11=mysqli_query($conn, $query11);              
                  $value11=mysqli_fetch_assoc($result11);
                  $num11=$value11['g'];



/*                  $count="SELECT count(start_date) as total from reservation";
                  $re=mysqli_query($conn, $count);
                  $val=mysqli_fetch_assoc($re);
                  $n=$val['total'];*/

                  /*for( $i=1; $i<=12; $i++){
                     $month=array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
                  $query="SELECT count(MONTH(start_date)) AS month FROM reservation where MONTH(start_date)=$i";
                  $result=mysqli_query($conn, $query);
                  $value=mysqli_fetch_assoc($result);
                  $num=$value['month'];
                  echo $num;


                  }*/

                $query5="SELECT count(vehicle.veh_class) as a from vehicle INNER JOIN reservation ON vehicle.vehicle_no=reservation.vehicle_no where veh_class='car'";
                  $result5=mysqli_query($conn, $query5);
                  $value5=mysqli_fetch_assoc($result5);
                  $num5=$value5['a'];
                  //echo $num5;

                   $query6="SELECT count(vehicle.veh_class) as b from vehicle INNER JOIN reservation ON vehicle.vehicle_no=reservation.vehicle_no where veh_class='cab'";
                  $result6=mysqli_query($conn, $query6);
                  $value6=mysqli_fetch_assoc($result6);
                  $num6=$value6['b'];
                  //echo $num6;

                   $query7="SELECT count(vehicle.veh_class) as c from vehicle INNER JOIN reservation ON vehicle.vehicle_no=reservation.vehicle_no where veh_class='bus'";
                  $result7=mysqli_query($conn, $query7);
                  $value7=mysqli_fetch_assoc($result7);
                  $num7=$value7['c'];
                  //echo $num7;

                   $query8="SELECT count(vehicle.veh_class) as d from vehicle INNER JOIN reservation ON vehicle.vehicle_no=reservation.vehicle_no where veh_class='van'";
                  $result8=mysqli_query($conn, $query8);
                  $value8=mysqli_fetch_assoc($result8);
                  $num8=$value8['d'];
                  //echo $num8;
                   




?>
<html>
  <head>
     <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            
         ['Task', 'Hours per Day'],
          ['Car',  <?php echo $num5 ?>],
          ['Cab',  <?php echo $num6 ?>],
          ['Bus',  <?php echo $num7 ?>],
          ['Van',  <?php echo $num8 ?>]

          
        ]);

        var options = {
          title: 'Vehicle reviews',
          subtitle: 'Most demanding Vehicles',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d_2'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            
         ['Task', 'Hours per Day'],
          ['D1',  <?php echo $num1 ?>],
          ['D2',  <?php echo $num2 ?>],
          ['D3',  <?php echo $num3 ?>],
          ['D4',  <?php echo $num4 ?>],
          ['D5',  <?php echo $num9 ?>],
          ['D6',  <?php echo $num10 ?>],
          ['D7',  <?php echo $num11 ?>]

          
        ]);

        var options = {
          title: 'Driver reviews',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d_1'));
        chart.draw(data, options);
      }
    </script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        <?php
           for( $i=1; $i<=12; $i++){
                 $month=array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
                  $query="SELECT count(MONTH(start_date)) AS month FROM reservation where MONTH(start_date)=$i";
                  $result=mysqli_query($conn, $query);
                  $value=mysqli_fetch_assoc($result);
                  $num[$i]=$value['month'];
                  
                  
          //  $num=array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
            $nam=array('JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP', 'OCT','NOV','DEC');
            $main=array($nam, $num); 
            
        
       } 
        ?>
        var data = new google.visualization.arrayToDataTable([
          ['Month', 'No.of Reservations'],
          ["JAN", <?php echo $num[1] ?>],
          ["FEB", <?php echo $num[2] ?>],
          ["MAR", <?php echo $num[3] ?>],
          ["APR", <?php echo $num[4] ?>],
          ["MAY", <?php echo $num[5] ?>],
          ["JUN", <?php echo $num[6] ?>],
          ["JUL", <?php echo $num[7] ?>],
          ["AUG", <?php echo $num[8] ?>],
          ["SEP", <?php echo $num[9] ?>],
          ["OCT", <?php echo $num[10] ?>],
          ["NOV", <?php echo $num[11] ?>],
          ["DEC", <?php echo $num[12] ?>]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Seasonal Reviews',
            subtitle: 'Most demanding Seasons' },
          axes: {
            x: {
              0: { side: 'top', label: 'Months'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
    <!--script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuf);
 
      function drawStuff() {

        
        //var chartDiv = document.getElementById('chart_div');



        var data = new google.visualization.arrayToDataTable([



        
         ['Galaxy','Brightness'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]

         

      
        ]);


        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Most Demanding Seasons',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'parsecs'},
            1: {title: 'apparent magnitude'}
          }
        };

        //function drawClassicChart() {
           var classicChart = new google.charts.Bar(document.getElementById('chart_div'));
            classicChart.draw(data, google.charts.Bar.convertOptions(classicOptions));
            
         // var classicChart = new google.visualization.ColumnChart(chartDiv);
         // classicChart.draw(data, classicOptions);
         
        };


       // drawClassicChart();
    //};
    </script-->
  </head>
  <body>
     <div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../homee.php'"></i>
  
</div>
<br>
<br>
    
    <div id="piechart_3d_1" style="width: 1000px; height: 500px;"></div>

    <br><br>
    <div id="chart_div" style="width: 800px; height: 500px;"></div>
    
    <br><br>
     <div id="piechart_3d_2" style="width: 1000px; height: 500px; position: absolute; left: 700px; top: 20px;"></div>



  </body>
</html>