
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
          ['D1',    <?php echo $num1 ?>],
          ['D2',      <?php echo $num2 ?>],
          ['D3',  <?php echo $num3 ?>],
          ['D4', <?php echo $num4 ?>]

          
        ]);

        var options = {
          title: 'Driver reviews',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>