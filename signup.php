<?php 

	session_start(); 
	$pagetitle = "Sign Up"; 
	include('up.php');
	
	include('includes/connection.php');

	if(isset($_POST['add_user_button'])): 
                
		// Initialize variables
		$uemail = $ufname = $username = $ulname = $upassword = ""; 

		$username       = $_POST['username'];
		$ufname         = $_POST['first_name'];
		$ulname         = $_POST['last_name'];
		$uemail        = $_POST['email'];
		$upassword      = md5($_POST['password']);

		// Check if email exists 
		$check  = "SELECT * FROM users WHERE user_email = '$uemail' LIMIT 1"; 
		$result = $mysqli->query($check); 
		$email  = mysqli_fetch_assoc($result); 

		if($email["user_email"]):
			?> 

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<!-- Show error message  -->
						<div class="alert alert-danger m-0 alert-dismissible fade show rounded-0 border-0" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
						</button>
						Hi, this email <?php echo $uemail; ?> already exists.
						</div>
					</div>
				</div>
			</div>
			<?php           
		 else: 
			
		// Insert into database query 
		$register   = "INSERT INTO users (user_name, user_first, user_last , user_password, created_at, user_email) VALUES ('". $username."', '". $ufname."', '". $ulname."', '". $upassword."', now(),'". $uemail."' )";
																							
																							
																							
																						
		if($mysqli->query($register) === true): 
			$firstname = ""; 
			$firstname = explode(" ", $ufname);
			$firstname[0]; 
			?> 
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						Congratulations <?php echo $firstname[0]; ?>, you have successfully registered
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
					</div>
				</div>
			</div>
			<?php       
		else:
			echo $mysqli->connect_error;
		endif; 
	endif; 
	endif; 
?>
<br><br><br><br>
			<section class="login-form py-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<form method="POST" action="" autocomplete="off">
								<div class="form-group">
									<input class="form-control" type="text" name="username" placeholder="Username" required style="color=#000">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="first_name" placeholder="First Name" required style="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="last_name" placeholder="Last Name" required style="">
								</div>
								<div class="form-group">
									<input class="form-control" type="email" name="email" placeholder="Email" required style="">
								</div>
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Password" required>
								</div>
								<div class="form-group">
									<input class="btn btn-success w-100" type="submit" value="Register" class="btn" name="add_user_button">
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<div class="text-center">
								<h4>Already have an account?</h4>
								<a href="login.php" class="btn btn-primary">Login</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php 
	include('footer.php'); 	