
<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM products"); // using mysqli_query instead
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edit products</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="Style.css">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
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
       
               <BR>
  <BR>
  

   	
   	
	<?php include("include/header.php");?>
    <div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#343a40">
    <h1 style="color:#ffffff">Edit products</h1></div><br>
	<table width='110%' border=0>

	<tr bgcolor='#343a40' style="color:#fff">
		<td>Id</td>
		<td>Title</td>
		<td>Category</td>
		<td> Price</td>
		<td>Description</td>
        <td>Image</td>
        <td>Keyword</td>
		<td>Quantity</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 
        
                
		echo "<tr>";
		echo "<td>".$res['prd_id']."</td>";
		
		echo "<td>".$res['prd_title']."</td>";
		echo "<td>".$res['prd_cat']."</td>";
		echo "<td>".$res['prd_price']."</td>";
		echo "<td>".$res['prd_desc']."</td>";
		echo "<td>".$res['prd_img']."</td>";
	     
        echo "<td>".$res['prd_keyword']."</td>";
		echo "<td>".$res['prd_quantity']."</td>";
		
			
		
		echo "<td><a href=\"edit.php?id=$res[prd_id]\">Edit</a> &nbsp;|<td><a href=\"delete.php?id=$res[prd_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";				
		
	
	
	}
	?>
	</table>



</body>
</html>
