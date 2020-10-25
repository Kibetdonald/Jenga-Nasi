

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
<h1 align="center" style="color:#ffffff">Add Admin</h1>
  </div>
  <br><br>


	</body>
</html>


	<form action="add_admin.php" method="post" name="form1">
		<table width="35%" border="0">
			<tr> 
				<td>admin_id</td>
				<td><input type="text" name="admin_id" required></td>
			</tr>
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"required></td>
			</tr>
			<tr> 
				<td>Phone Number</td>
				<td><input type="text" name="phone"required></td>
			</tr>
			<tr> 
				<td>user_email</td>
				<td><input type="email" name="user_email"required></td>
			</tr>


			<tr>
    <td>user_password</td>
    <td><input type="password" id="password" name="password" value="" minlength="8" "
     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
     
   </td>

			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
}



</script>
</body>
</html>


