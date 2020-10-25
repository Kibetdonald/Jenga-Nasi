






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
                   
        
               
        
    <br><br>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#343a40">
<h1 align="center" style="color:#ffffff">Stock Report</h1>
  </div>
  <br><br>
  <button  onClick="window.print()">Print Report</button>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
 

 ['Product Name','Quantity'],
 <?php 
			$query = "SELECT * from products";
 
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['prd_title']."',".$row['prd_quantity']."],";
			 }
			 ?> 
 
 ]);
 
 var options = {
 title: 'Number of Products According to their Quantity',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },

 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script>
 
</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width:110%; height: 500px;"></div>
 </div>
 
</body>
</html>