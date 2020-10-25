
<?php
error_reporting(0);
session_start();
if(isset($_GET['user_id'])){
    
    $user_id = $_GET['user_id'];
    
}
?>






<?php

include("up.php");

            
$session_email = $_SESSION['user_email'];
$select_customer = "select * from users where user_email='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$user_email = $row_customer['user_email'];
$user_first = $row_customer['user_first'];
$user_last = $row_customer['user_last'];


?>



		<br><br><br><br><br>
       
    <center><!--  center Begin  -->
    
    <h1>   Welcome <?php echo $user_first; ?>
												<?php echo $user_last; ?>, You're Orders </h1>
    
   
    
    <p class="text-muted">
      
        If you have any questions, feel free to <a href="feedback.php">Contact Us</a><strong>.Shop With us</strong>
        
    </p>
 
</center><!--  center Finish  -->
    <center>
    <table width='75%' border-spacing='100' solid black>

    <div class="card">
      <div class="card-body">
          
        <thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> NO: </th>
                <th> Due Amount: </th>
                <th> Invoice No: </th>
                <th> Product Name: </th>
                <th> Product image: </th>
                <th> Quantity: </th>
                <th> Order Date:</th>
                <th> Paid / Unpaid: </th>
                <th> Status: </th>
                
            </tr><!--  tr Finish  -->
            
        </thead><!--  thead Finish  -->
        
        <tbody><!--  tbody Begin  -->
        <hr>   
           <?php 
            
           
 

    $session_email = $_SESSION['user_email'];
    $select_customer = "select * from users where user_email='$session_email'";
    $run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
    $row_customer = mysqli_fetch_array($run_customer);
    $user_email = $row_customer['user_email'];
    $user_first = $row_customer['user_first'];
    $user_last = $row_customer['user_last'];
    

            $get_orders = "SELECT * FROM customer_orders INNER JOIN products ON customer_orders.product_id = products.prd_id where user_id='$user_id' 
            ORDER BY order_date DESC";




            
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['order_id'];
                
                $due_amount = $row_orders['due_amount'];
                
                $invoice_no = $row_orders['invoice_no'];
                $prd_title = $row_orders['prd_title'];
                $prd_img = $row_orders['prd_img'];
                $qty = $row_orders['qty'];
                
               
                
                $order_date = substr($row_orders['order_date'],0,11);
                
                $order_status = $row_orders['order_status'];
                
                $i++;
                
                if($order_status=='pending'){
                    
                    $order_status = 'Unpaid';
                    
                }else{
                    
                    $order_status = 'Paid';
                    
                }
            
            ?>
            
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $i; ?> </th>
                <td> Ksh.<?php echo $due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $prd_title; ?> </td>
                <td><img width="130" height="130" src="images/<?php echo $prd_img;?>" alt="<?php echo $prd_img;?>" ></td>
                <td> <?php echo $qty; ?> </td>
               
                
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                
                <td>
                    
                <a href="invoice.php?order_id=<?php echo $order_id; ?>"  class="btn btn-success btn-sm"> PAY NOW </a>
               
                
                <a href="delete_order.php?order_id=<?php echo $order_id; 
                
                ?>"  class="btn btn-success btn-sm"
             
                > Cancel Order </a>
                    
                </td>
                
            </tr><!--  tr Finish  -->
        
            <?php } ?>
            
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
 </center>
<!--  table-responsive Finish  -->





<html>
<body>