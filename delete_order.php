
<?php
$db = mysqli_connect('localhost', 'root', '', 'jengaa');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['order_id']))
{

$result = mysqli_query($db,"DELETE FROM customer_orders WHERE order_id=".$_GET['order_id']);
if($result==true)
	echo "sucess";
header("Location:myorders.php");
}

?>