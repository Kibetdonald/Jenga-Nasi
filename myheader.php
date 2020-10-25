

<?php

include("includes/functions.php");
include("includes/db.php");

session_start();
?>


<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/getit.css"/>


<!DOCTYPE html PUBLIC>
<header>

<title>VOID</title>




</header>


<div id="wrapper">
    <div id="header">
         <div id="subheader">  
         <p><i class="fa fa-phone" style="font-size:28px"></i> Call Tel: +254703959145 | Best Online Shop.Delivered!</p>
    </div>
    <div class="containers">
    <p><i class="fa fa-star" aria-hidden="true"></i></p>
                <p>Enquire Now</p>
                    <p>Track Order</p>
                    <p>Help</p>
                    <p><i class="fa fa-star" aria-hidden="true"></i></p>
                    
</div>
</div>

       <div id="main-header">
        <div id="logo">
             
                 <span id="IIST">Shop@ Void
                 
                 </span>
                 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

            
            </div>


        <div id="search">
       <form method="get" action="result.php" enctype="multipart/form-data">
  
   <div class="search">
      
      <input type="text" class="search-area" name="user_query" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search products, brands and categories..."/>
      <input type="submit" value="Search" class="search-btn" name="search"/>
    </div>

    </form>
        
    <div class="user-panel">
      <p>
      <i class="fa fa-user" style="font-size:28px"></i>
      <?php
       
     
       if(isset($_SESSION['Email_id']))
       {
                 echo ' <a class="mr-4" href="logout.php">Logout</a>';
               }else{
                 echo '  <a class="mr-4" href="login.php">Login</a>';
               }
               ?>
              
              
   
  
</p>

</div>
<div class="help">
<i class="fa fa-question" style="font-size:28px"></i> 

   Help
</p>

</div>
<div class="cart">
<li><a href="cart.php"><i class="fa fa-shopping-cart" 

style="font-size:28px"></i> Cart</a>
<font color="red"><sup> <?php total_items(); ?></font>&nbsp;</sup></li>
</li>
</div>
        </div></div>
        <div class="breadcrumb-bar">
				<div class="container-fluid">
        <div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="index.php">Shop</a></li>
                  <li class="breadcrumb-item"><a href="cart.php">CART</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
              </nav>
</div>