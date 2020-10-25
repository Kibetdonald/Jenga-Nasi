
<!DOCTYPE html>
<html>
<head>

<?php

include("includes/db.php");



?>

<?php


include("includes/db.php");
include("includes/functions.php");
cart();
?>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link href="bootstrap.css" rel="stylesheet" type="text/css"/>

  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EJenga System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body onload="show_cart_count()">
  

<div class="site-header">
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg  bg-dark w-100">
        <a class="navbar-brand" href="index.php">E-Jenga</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Engineer.php">Engineer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Faq.php">Faq</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Contact.php">Contact</a>
      </li>
    </ul>
   

<div class="container">
    
    <form method="get" action="result.php" enctype="multipart/form-data">
  
  <div class="search">
     
     <input type="text" class="search-area" name="user_query" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search here..."/>
     <input type="submit" value="Search" class="search-btn" name="search"/>
   </div>

   </form>

  </div>
    <form class="form-inline">
        </div>

      
            
<a href="cart.php"><i class="fa fa-shopping-cart" 

style="font-size:30px"></i> Cart</a>
<font color="red"><sup> <?php total_items(); ?></font>&nbsp;</sup></li>
</li>

      


      <?php
       
            
if(isset($_SESSION['user_email']))
{
          echo ' <a class="mr-4" href="logout.php">Logout</a>';
        }else{
          echo '  <a class="mr-4" href="login.php">Login</a>';
        }
        ?>
        <!-- <a class="mr-4" href="login.php">Login</a> -->
        <a class="mr-4" href="signup.php">Signup</a>
     
    </form>
  </div>
</nav>
        </div>
        
    </div>
</div>

<div class="overlay"></div>