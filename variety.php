<?php 
session_start();

    $pagetitle = "Our Products"; 
	?>
	 <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
	 <link href="getit.css" rel="stylesheet" type="text/css"/>


	 <style>
.prod_box{
	padding:20px;
	height:160px;
	width:150px
}
span.current{
	margin-left:200px;
}
		 </style>
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
    
    echo"<span class=current>$cat</span>";
    
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
			

			

        <?php  

getpro();
get_pro_cat();


 ?>




</div>
		  

         
      </div>
							</div>
						</div>
						

				<br><br><br><br><br><br><br><br>
							
			</div>
		</div>
	</div>
</section>
<?php include('footer.php'); ?>

