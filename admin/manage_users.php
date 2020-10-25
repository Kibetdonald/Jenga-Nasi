
<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM admin ORDER BY admin_id DESC"); // using mysqli_query instead
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="Style.css">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
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
                   
        
               
        
    <br><br>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#343a40">
<h1 align="center" style="color:#ffffff">Edit Admins</h1>
  </div>
  <br><br>


	</body>
</html>

<a href="add_user.php">Add admin</a><br/><br/>

	<table width='80%' border=1>

	<tr bgcolor='#fff'>
		<td>admin_id</td>
		<td>Username</td>
		<td>Phone Number</td>
		<td>user_email</td>
		<td>user_password</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['admin_id']."</td>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['user_email']."</td>";
		echo "<td>".$res['user_password']."</td>";
			
		
		echo "          
		<td><a href=\"delete_admin.php?id=$res[admin_id]\" onClick=\"return confirm('Are you sure you want to remove?')\">Remove admin</a></td>";				
		
	
	
	}
	?>
	</table>



</body>
</html>
