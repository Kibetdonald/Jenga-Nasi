<html>
<head>
	<title>Add Admin</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$admin_id = mysqli_real_escape_string($mysqli, $_POST['admin_id']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
	
	$user_password=md5($_POST['user_password']);
		
	// checking empty fields
	if(empty($admin_id) || empty($user_email) || empty($user_password)) {
				
		if(empty($admin_id)) {
			echo "<font color='red'>admin_id field is empty.</font><br/>";
		}
		
		if(empty($user_email)) {
			echo "<font color='red'>user_email field is empty.</font><br/>";
		}
		
		if(empty($user_password)) {
			echo "<font color='red'>user_password field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO admin (admin_id,username,phone,user_email,user_password) VALUES('$admin_id','$username','$phone','$user_email','$user_password')");
		
		//display success message


		echo '<script>
		swal("admin Added!");
  </script>';
		   
  echo "<script> window.open('manage_users.php?', '_self')   </script>"; 
		
	
		
	}
}
?>
</body>
</html>
