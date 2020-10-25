<?php 

include("includes/db.php");
include("includes/functions.php");
session_start();
error_reporting(0);
?>

<?php
session_start();
?>




<?php

$session_email = $_SESSION['user_email'];
$select_customer = "select * from users where user_email='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$user_email = $row_customer['user_email'];
?>





<?php 

if(isset($_GET['c_id'])){
    
    $user_email = $_GET['c_id'];
    
}

$ip_add = getip();

$status = "pending";

$invoice_no = mt_rand();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
    
    $pro_id = $row_cart['p_id'];
    $qty = $row_cart['qty'];
    
    $get_products = "select * from products where prd_id='$pro_id'";
    
    $run_products = mysqli_query($con,$get_products);
    
    

            while($row_products = mysqli_fetch_array($run_products)){
        
        $sub_total = $row_products['prd_price']*$qty;
        $insert_customer_order = "insert into customer_orders (user_id,due_amount,invoice_no,product_id,qty,order_date,order_status) values ('$user_id','$sub_total','$invoice_no','$pro_id','$qty',NOW(),'$status')";
        
        $run_customer_order = mysqli_query($con,$insert_customer_order);
        
        $insert_pending_order = "insert into pending_orders (user_id,invoice_no,product_id,qty,order_status) values ('$user_id','$invoice_no','$pro_id','$qty','$status')";
        
        $run_pending_order = mysqli_query($con,$insert_pending_order);
        
        $delete_cart = "delete from cart where ip_add='$ip_add'";
        
        $run_delete = mysqli_query($con,$delete_cart);
       
  
        echo "<script>alert('Your orders has been submitted,Successfully')</script>";
        
        echo "<script>window.open('myorders.php','_self')</script>";
        
    
    }}


?>