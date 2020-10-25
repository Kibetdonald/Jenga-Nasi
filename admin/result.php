<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Farmer Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="Style.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
    <p><i class="fa fa-phone" style="font-size:28px"></i> Call Tel: +254703959145 | Best Online Nursery Store.Delivered!</p>
                
                   
    </div>
</div>
        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
       
        
        
        <div id="navigation">
        <nav>
            
           
            
            </nav>
            </div>
        </div>
        <br><br><br><br><br><br>
  <?php include("include/header.php");?>
    <div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#1AAA1A">
    <h1>Edit/Delete Plants</h1></div><br>
  
<form action="result.php" method="get"> 
		
		
<table width='90%' border=1px solid black>
<tr>

    <th>Product Id</th>
        <th>Product Category</th>
        <th>Product Variety</th>
        <th>Product Title</th>
        <th>Product Price</th>
        <th>Product Description</th>
        <th>Product Image</th>
        <th>Product Keyword</th>
        <th>Product Quantity</th>
         <th>Update</th>

</tr>
<?php

$con = mysqli_connect("localhost","root","","greenleaf");

if(mysqli_connect_errno()){
	
	echo"Failed to connect : " . mysqli_connect_error(); 
	
}

	
	if(isset($_GET['search'])){
	
	$get_value = $_GET['user_query'];
	
	if($get_value==''){
	
	echo "<center><b>Please go back, and Type Something in the Search Box....!</b></center>";
	exit();
	}
    
   
	$result_query = "select * from products WHERE prd_keyword LIKE '%$get_value%'";
	$run_result = mysqli_query($con,$result_query);
	
	if(mysqli_num_rows($run_result)<1){
	
    echo "<center><b>Oops! Sorry, nothing was found in the database!</b></center>";
    
    
	exit();
	
	}
	
	while($row_result=mysqli_fetch_array($run_result)){
	
		$prd_id=$row_result['prd_id'];
		$prd_cat=$row_result['prd_cat'];
		$prd_variety=$row_result['prd_variety'];
        $prd_title=$row_result['prd_title'];
        $prd_price=$row_result['prd_price'];
		$prd_desc=$row_result['prd_desc'];
        $prd_img=$row_result['prd_img'];
        
		$prd_keyword=$row_result['prd_keyword'];
        $prd_quantity=$row_result['prd_quantity'];
	
		
    echo "<div class='results'>
		
		
        <tr>
    
        <td>$prd_id</td>
        <td>$prd_cat</td>
        <td>$prd_variety</td>
        <td>$prd_title</td>
        <td>$prd_price</td>
        <td> $prd_desc</td>
   <td>$prd_img</td>
  
        <td>$prd_keyword</td>
        <td>$prd_quantity</td>
        <td><a href=\"edit.php?id=$row_result[prd_id]\">Edit</a>|<a href=\"delete.php?id=$row_result[prd_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>
        
        
        </tr>
        </div>";

		}
}


?>


</body> 
</html>