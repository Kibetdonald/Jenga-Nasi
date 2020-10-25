<?php
error_reporting(0);
include('db.php');
session_start();



if (isset($_POST['submit']))
{
$admin_id=$_POST['admin_id'];

$username=mysqli_real_escape_string($con, $_POST['username']);
$phone=mysqli_real_escape_string($con, $_POST['phone']);
$user_email=mysqli_real_escape_string($con, $_POST['user_email']);
$user_password=mysqli_real_escape_string($con, $_POST['user_password']);

//updating the table
mysqli_query($con,"UPDATE admin SET username='$username', phone='$phone', user_email='$user_email', user_password='$user_password' WHERE admin_id='$admin_id'");


echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Admin Edited',
  showConfirmButton: false,
  timer: 2000
})
</script>"; 

echo"<script>window.open('index.php?tn=$r','_self')</script>";


}


if (isset($_GET['admin_id']) && is_numeric($_GET['admin_id']) && $_GET['admin_id'] > 0)
{

$admin_id = $_GET['admin_id'];
$result = mysqli_query($con,"SELECT * FROM admin WHERE admin_id=".$_GET['admin_id']);

$row = mysqli_fetch_array($result);

if($row)
{

$admin_id = $row['admin_id'];
$admin_id = $row['admin_id'];
$username = $row['username'];
$phone = $row['phone'];
$user_email=$row['user_email'];
$user_password = $row['user_password'];

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="Style.css">
<link href="style/css/k.css" rel="stylesheet">




<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
table{
  border: 1px solid black;
  }
   table{
   width: 100%;
}
th{
  width:40px;
  font-size: 14px;
}
td{font-size: 12px;}
.label{
	color:black;
}
.btn {
  

  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 13px;
  cursor: pointer;
  background:#343a40;
}

/* Darker background on mouse-over */

.circular--square {
  border-radius: 50%;
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
  

   	
   	
	<?php include("include/header.php");?>
    <div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#343a40">
    <h1 style="color:#ffffff">Edit Profile</h1></div><br>
   
              <div class="container">
              <br><br><br><br><br>
   	<div class="container-fluid main-container">
       
	<div class="col-md-9 content" style="margin-left:50px">
  	<div class="panel panel-default">

	
	<div class="panel-body">
		<h3>
    <!-- end of center content -->
    <!-- end of right content -->
<!-- end of main_container -->

    <h5 class="card-title"><span class="text-danger"></span></h5>
    <form method="post" action="profile-settings.php">
    <input type="hidden" name="id" value="<?php echo $admin_id; ?>"/>
	 <div class="form-row">
   
	 <div class="form-group">
            <label>admin Id <span class="text-danger"></span></label>
            <input type="text" name="admin_id" id="admin_id" value="<?php echo $admin_id; ?>" required>
        </div>

		<div class="form-group">
            <label>Username <span class="text-danger"></span></label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>" required>
        </div>
		<div class="form-group">
            <label>Phone <span class="text-danger"></span></label>
            <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" required>
        </div>




	    <div class="form-group">
            <label>user_email <span class="text-danger"></span></label>
            <input type="text" name="user_email" id="user_email" value="<?php echo $user_email; ?>" required>
        </div>
        <div class="form-group">
            <label>user_password <span class="text-danger"></span></label>
            <input type="text" name="user_password" id="user_password" value="<?php echo $user_password; ?>" required>
        </div>
        
        <div class="form-group">
		<div class="col-sm-8">
			<button type="button" name="cancel" value="cancel" id="cancel" onClick="window.location='index.php';" class="btn btn-primary">Cancel</button>
		</div>
		<div class="col-sm-4">
            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i>Save Changes</button>
		</div>
        </div>
    </form>
</body>
</html>
		</div>
               
                
                    
        </div>
		
        <!-- main content area end -->
        <!-- footer area start-->
       
        <!-- footer area end-->
    </div>
	</div>
	</div>
	</div>
	</div>
	<div>
		</div>
	</div>
	</div>
	<div>
	

   

</body>

</html>

   