<?php 
session_start(); 

include('up.php'); ?>
	 <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
	 <link href="getit.css" rel="stylesheet" type="text/css"/>
	 <br><br><br>


	 <style>
.w3-content w3-section  img{
	flcenter;
}
.prd_content {
    width: 1089px;
    float: left;
    margin-left:-35px;
    margin-top: -85px;
    padding: 5px 10px;
}
.our-steps py-5{
	margin-top:600px;
}
	 </style>
	 <div class="w3-content w3-section">
<center>
		<img class="mySlides w3-animate-fading" src="images/slider_1.jpg" style="width:80%" height="500px">

 <img class="mySlides w3-animate-fading" src="images/slider_3.jpg" style="width:80%" height="500px">
 <img class="mySlides w3-animate-fading" src="images/slider_4.jpg" style="width:80%" height="500px">
	  >
		  </center>
		  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
 var i;
 var x = document.getElementsByClassName("mySlides");
 for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";  
 }
 myIndex++;
 if (myIndex > x.length) {myIndex = 1}    
 x[myIndex-1].style.display = "block";  
 setTimeout(carousel, 9000);    
}
</script>	
		

<section>
		<div class="slider-caption">
			<div class="container">
				<div class="row">
					<div class="col-md-4 offset-1">
						<div class="slider-caption-card text-white">
							<div class="card-body">
								<h1>Jenga Nasi</h1>
								<p>Construct With Us!!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

				
	
		
&nbsp; 

<section class="products py-5 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<Center>	<h2 class="font-weight-bold">Our <span class="text-success">Products</span></h2></center>
					<hr>
				</div>
			</div> 
&nbsp; 
			<div class="row">
							<div class="col-md-3">
				
					<div class="prd_content">		
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


</div>





</div></div></div></div>
</section>






				<br>



<section class="our-steps py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<center>	<h2 class="font-weight-bold">FREE DELIVERY WITHIN  <span class="text-success"> 3-5 DAYS</span></h2></center>
					<hr>
				</div>
			</div> 

			<div class="row">
				<div class="col-md-4">
					<div class="card rounded-0 border-0">
						<div class="card-body text-center">
	
						<i class="fa fa-plane"></i>

							<h6 class="m-0">FREE DELIVERY COUNTRYWIDE</h6>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card rounded-0 border-0">
						<div class="card-body text-center">
						<i class="fa fa-money"></i>
							<h6 class="m-0">Affordable</h6>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card rounded-0 border-0">
						<div class="card-body text-center">
						<i class="fa fa-guarantee "></i>
							<h6 class="m-0">Quality Guaranteed</h6>
							
						</div>
						</div>
					</div>
					
						<div class="col-md-4">
						
					
		</div>
	</section>


	<section class="our-steps py-5">
		<div class="container">
			<div class="row">
				
			</div> 

			<div class="row">
				<div class="col-md-4">
					<div class="card rounded-0 border-0">
						<div class="card-body text-center">
	
									<h6 class="m-0">Wide Selection</h6>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card rounded-0 border-0">
						<div class="card-body text-center">
						
							<h4 class="m-0">Affordable</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card rounded-0 border-0">
						<div class="card-body text-center">
							<h4 class="m-0">Quality</h4>
							
						</div>
						</div>
					</div>
					
						<div class="col-md-4">
						
					
		</div>
	</section>

	



<?php include('footer.php'); ?>