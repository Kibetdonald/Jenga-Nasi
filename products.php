<?php 
session_start();

    $pagetitle = "Our Products"; 
	?>
	 <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
     <link href="getit.css" rel="stylesheet" type="text/css"/>
	
	 
	 <?php



include("includes/db.php");


?>

<?php include('up.php'); ?>
<br><br><br><br><br>



		<div class="row">
			 <div class="col-md-3"> <!--Product Filter  -->
				<div class="product-filter bg-light p-3">
					
						

              
			
						
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
 
    <div class="left_content">
      <div class="title_box">
      ALL COLLECTIONS
	  </div>
      <ul class="left_menu">
        
 <?php 
     getcats(); 
     

 ?>
        
      </ul>
     
						</div>
					</div>
				</div>
			

			

     <div class="center_content">		
<?php  


$get_pro = "select * from products";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){

 
        $product_id = $row_pro['prd_id'];
      
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
   


        
            
        echo"
        <div class='prod_box'>
        <div class='top_prod_box'></div>
        <div class='center_prod_box'>
  
  <div class='product_img'><a href='details.php?pro_id=$product_id'><img src='images/$product_image' alt='' border='0' width='150' height='160' /></a></div>
  <div class='product_title'><a href='details.php?pro_id=$product_id'>$product_title</a></div>
  <div class='prod_price'><span class='price'> Ksh $product_price</span></div>
</div>
<div class='bottom_prod_box'></div>
<div class='prod_details_tab'> <a href='products.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''></a>
  <a href='details.php?pro_id=$product_id' class='prod_details'></a> </div>
  
 
</div>



";


}
?>


</div></div>
		  

         
  
<?php include('footer.php'); ?>

