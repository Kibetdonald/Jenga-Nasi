




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("up.php");



?>
 <link href="getit.css" rel="stylesheet" type="text/css"/>
	
<br<br><br><br>>
<section class="our-products py-5">
	<div class="container">

		<div class="row">
			 <div class="col-md-3"> <!--Product Filter  -->
				<div class="product-filter bg-light p-3">
					<div class="card bg-transparent">
					
					
					<?php
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    ?>
    <div class="title_box">
      Categories
	  </div>
      <ul class="left_menu">
        
 <?php 
     getcats(); 
     

 ?>
        
      </ul>
				</div>
			</div>
			</div>

      <div class="col-md-9">
				<div class="all-products"> <!--All Products -->
					<div class="row">
						<div class="col-md-4">
			
						<div class="card rounded-0 border-0">
	</div>
</div></div></div>
       <div class="center_content">
      <div class="center_title_bar">Search Result</div>


<?php  
if(isset($_GET['search'])){

$search_query = $_GET['user_query'];


$get_pro = "select * from products where prd_keyword like '%$search_query%'";
$run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
       
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
   


        echo"
                
                <div class='prod_boxes'>
        <div class='top_prod_box'></div>
        <div class='center_prod_box'>
          <div class='product_title'><a href='details.php?pro_id=$product_id'>$product_title</a></div>
          <div class='product_img'><a href='details.php?pro_id=$product_id'><img src='images/$product_image' alt='' border='0' width='90' height='110' /></a></div>
          <div class='prod_price'><span class='price'>$product_price</span></div>
        </div>
        <div class='bottom_prod_box'></div>
        <div class='prod_details_tab'> <a href='result.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''></a>
          <a href='details.php?pro_id=$product_id' class='prod_details'>Details</a> </div>
      </div>
     

               

              


        ";


    }

}







 ?>




  
 
  
 
</div>
  <!-- end of main content -->
  <div class="footer">
   
     
    
  </div>
 
</div>
<!-- end of main_container -->
</body>
</html>
