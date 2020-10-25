
<?php 

$pagetitle = "Our Products"; 
?>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="getit.css" rel="stylesheet" type="text/css"/>
<link href="includes/styles.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php


include("includes/db.php");


?> 
<style>
.prod_box_big {
    
    margin-left: -420px;
    border: 1px solid rgba(0, 0, 0, 0.125);
    width: 500px;
}
.center_content{
  width: 20px;
  float: left;
  padding: 5px 10px;
}
.content_right{
  width: 305px;
border: 1px solid rgba(0, 0, 0, 0.125);
margin-right: 38px;
margin-top: -498px;
float: right;
}
input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    height:30px; 
    width: 45px;
    }
</style>
<?php include('up.php'); ?>
<br><br><br><br><br>
 


		<div class="row">
			
				<div class="product-filter bg-light p-3">
				
						

    </div>
			
    <br><br><br><br><br>
            

        <div class="center_content">	

          <div class="banner_adds"> <a href="detail.php?prd_id=20"></a> </div>
 </div>
 
 
 
 <!-- end of left content -->
 <div class="center_details">
  
   
<?php

details();

?>



  </div>
          </div>
        </div>
        

    
    <!-- Pagination  -->
  
      
    
  </div>
  <div class="content_right">
<label class="qty">Qty: </label>
<input type="number" name="qty"/>
<br><br>
<a href='details.php?addcart=$product_id' class='addtocart'>ADD TO CART</a>
</div>
<?php include('footer.php'); ?>


      
     

  
     
     <br><br><br><br>
   




   
   
 </div>
 <!-- end of center content -->


<?php


cart();

?>

<!-- end of main_container -->
</body>
</html>
