<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$con=mysqli_connect("localhost","root", "");
if(!$con)
{
  echo ("Connection to the database Engine Failed");

}

else{

  echo("Established connection successfully");
}
//select database for use
mysqli_select_db($con,"isproject") or die("could not select the database");
//MySQL Query to read data

$query="select* from constructiondetails where username=$username";
$result=mysqli_query($con,$query);
while ($row = mysqli_fetch_array($result)) {
echo "<b>{$row['startdate']}</b>";
echo "<br />";
echo "<b>{$row['enddate']}</b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['username'])) {
$username = $_GET['username'];
$query1 = mysqli_query("select * from constructiondetails where username=$username", $con);
while ($row1 = mysqli_fetch_array($query1)) {
?>
<form>
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['startdate']; ?>
<span>E-mail:</span> <?php echo $row1['enddate']; ?>

</form>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysqli_close($con); // Closing Connection with Server
?>
</body>
</html>