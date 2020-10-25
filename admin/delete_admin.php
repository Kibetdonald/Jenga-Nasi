
<?php
$db = mysqli_connect('localhost', 'root', '', 'jengaa');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['id']))
{

$result = mysqli_query($db,"DELETE FROM admin WHERE admin_id=".$_GET['id']);
if($result==true)
	echo "sucess";
header("Location:manage_users.php");
}

?>