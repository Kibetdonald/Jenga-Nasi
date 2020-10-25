<?php
session_start();
include_once('db.php');
if(isset($_SESSION['user_email'])){
$admin_id=$_SESSION['admin_id'];
$user_email=$_SESSION['user_email'];


}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/../Login.php");
exit();
}


$session_email = $_SESSION['user_email'];
$select_customer = "select * from admin where user_email='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$username = $row_customer['username'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" href="Style.css">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   <style>
	
.profile_info img {
	
	width: 50px; 
	height: 50px; 
	margin: 5px;
	
}

</style>
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
  <BR>

   	
   	<div class="container-fluid main-container">
	<?php include("include/header.php");?>
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#ffffff">
	<h1>Welcome Admin,
    
    
    
     <div class="profile_info">
			<img src="admin_profile.png"  >
			</div> </h1></div><br>
	<div class="panel-body">
		<h3>
<?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?></h3>
	</div>
        </div></div>
<?php include("include/js.php"); ?>
             
       
    
</div>
</body>
</html>