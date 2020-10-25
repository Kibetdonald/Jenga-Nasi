<?php
$con = new mysqli('localhost', 'root', '', 'jengaa');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>Quantity Report</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="Style.css">
  <link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script type="text/javascript" src="./charts/loader.js"></script>
 <body>
           
           <center>
                   <div id="main-header">
                   <div id="logo">
                       <span id="IST">E-Jenga</span
                           >
                       
                       </div>
                   
                 
                       
                   </div>
                            </center>
                   </div>
                   <br>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#343a40">
<h1 align="center" style="color:#ffffff">Monthly Sales  Report</h1>
  </div>

  <br><br>

  <center>
  
  <br><br>
  <button  onClick="window.print()">Print Report</button>
  <div id="barchart" style="width: 750px; height: 500px;" align="centre">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="./charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);


  function drawChart(){
    var data = google.visualization.arrayToDataTable([
      ['Months', 'Sales  '],
      
      
     
      <?php
      for($i = 01; $i <= 04; $i++){
      //sales
      $sql = "SELECT sum(due_amount) AS total FROM customer_orders WHERE month(order_date) = '$i'";
      $sales_query = $con->query($sql);
      $sales_row = $sales_query->fetch_assoc();
      //displaying the needed data
      echo '["Month'.$i.'", '.$sales_row['total'].'],';
      }
      ?>
    ]);

    var options = {
      chart: {
   
      }
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material'));

chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
</>
<body>
<div id="barchart_material" style="width: 500px; height: 300px;"></div>
</center>
<center>
<h3>Monthly Sales Recarp Report</h3>
<h5>Tabular Representation</h5>
<table width='60%' border=2px solid black>
<tr>

    <th><center>Month</center></th>
        <th><center>Sales</center></th>

   

</tr>


<?php
      for($i = 01; $i <= 04; $i++){
      //sales
      $sql = "SELECT sum(due_amount) AS total FROM customer_orders WHERE month(order_date) = '$i'";
      $sales_query = $con->query($sql);
      $sales_row = $sales_query->fetch_assoc();
      //displaying the needed data

      echo 
      
      '
      <tr>
     <td><center> Month                             ('.$i.')</center></td>
      <td><center> '.$sales_row['total'].'</center></td>
      </tr>'
      ;
      }
      ?>
</center>




</body>
</html>
