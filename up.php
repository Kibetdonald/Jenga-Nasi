<doctype html>
<?php

include("includes/db.php");


?>

<?php


include("includes/db.php");
include("includes/functions.php");
cart();
?>
<title>EJenga System</title>
<link rel="stylesheet" href="stylesheet.css"/>
<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.css"/>
  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.css/fontawesome.min"/>

  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/solid.css"/>



  <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css"/>





  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<header>

<div class="top-wrapper">
<div class="top-text">
  <p>
    
<i class="fa fa-phone" 
                 
                 style="font-size:30px"></i>
                 Call Tel: +254703959145 | Jenga Nasi!</p>
</div>
<div class="login">
<?php
          
       if(isset($_SESSION['user_email']))
       {
                 echo ' <a class="mr-4" href="logout.php">Logout</a>';
               }else{
                 echo '  <a class="mr-4" href="login.php">Login</a>';
               }
               ?>
               <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
<!--Twitter-->
<a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Google +-->
<a class="btn-floating btn-lg btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
<!--Linkedin-->
<a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
<!--Instagram-->
<a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
<!--Pinterest-->
<a class="btn-floating btn-lg btn-pin" type="button" role="button"><i class="fab fa-pinterest"></i></a>

</div>
</div>
<div class="navigation">
<img src="images/JENGA-NASI.png" width="250px" height="150px"/>


</div>
<hr>
<div class="site-nav">
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg">
      
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-links" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-links" href="about.php">About</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-links" href="Products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-links" href="Engineer.php">Engineer</a>
      </li>
      <li class="nav-item">
        <a class="nav-links" href="Faq.php">Faq</a>
      </li>
      <li class="nav-search">
      <form method="get" action="result.php" enctype="multipart/form-data">
  
      <input type="text" class="search-area" name="user_query" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search here..."/>
      <input type="submit" value="Search" class="search-btn" name="search"/>
   


    </form>
      </li>

      <li class="cart">
                 
<a href="cart.php"><i class="fa fa-shopping-cart" 

style="font-size:30px"></i> Cart</a>
<font color="red"><sup> <?php total_items(); ?></font>&nbsp;</sup></li>

              </li>
              |
              <li class="wishlist">
                 
                 <a href="cart.php"><i class="fa fa-heart" 
                 
                 style="font-size:30px"></i> Wishlist</a>
                 
                 
                               </li>
    </ul>
    <hr>
    </div>
              </div>

        </div>

</header>



</body>

</html>