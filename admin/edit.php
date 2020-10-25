<?php
error_reporting(0);
include('db.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$prd_cat=mysqli_real_escape_string($con, $_POST['prd_cat']);
$prd_variety=mysqli_real_escape_string($con, $_POST['prd_variety']);
$prd_title=mysqli_real_escape_string($con, $_POST['prd_title']);
$prd_price=mysqli_real_escape_string($con, $_POST['prd_price']);
$prd_desc=mysqli_real_escape_string($con, $_POST['prd_desc']);
$prd_img=mysqli_real_escape_string($con, $_POST['prd_img']);
$prd_keyword=mysqli_real_escape_string($con, $_POST['prd_keyword']);
$prd_quantity=mysqli_real_escape_string($con, $_POST['prd_quantity']);

//updating the table
mysqli_query($con,"UPDATE products SET prd_title='$prd_title', prd_price='$prd_price', prd_desc='$prd_desc', prd_img='$prd_img', prd_keyword='$prd_keyword' , prd_quantity='$prd_quantity' WHERE prd_id='$id'");


echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'PRODUCT ADDED',
  showConfirmButton: false,
  timer: 2000
})
</script>"; 

echo"<script>window.open('manage.php?tn=$r','_self')</script>";


}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM products WHERE prd_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['prd_id'];
$prd_cat = $row['prd_cat'];
$prd_title=$row['prd_title'];
$prd_price = $row['prd_price'];
$prd_desc = $row['prd_desc'];
$prd_img=$row['prd_img'];
$prd_keyword = $row['prd_keyword'];
$prd_quantity = $row['prd_quantity'];
}
else
{
echo "No results!";
}
}

$get_cat = "select * from categories where cat_id='$prd_cat'";
$run_cat = mysqli_query($con,$get_cat);
$row_cat = mysqli_fetch_array($run_cat);

$cat_title = $row_cat['cat_title'];

$get_subs = "select * from variety where variety_id='$prd_variety'";
$run_subs = mysqli_query($con,$get_subs);
$row_subs = mysqli_fetch_array($run_subs);



$variety_title = $row_subs['variety_title'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edit products</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="Style.css">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


<link rel="stylesheet" href="Inventmng/srtdash/assets/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="Inventmng/srtdash/assets/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
table{
  border: 1px solid black;
  }
   table{
   width: 100%;
}
th{
  width:40px;
  font-size: 14px;
}
td{font-size: 12px;}
.btn {
  

  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 13px;
  cursor: pointer;
  background:;
}

/* Darker background on mouse-over */

.circular--square {
  border-radius: 50%;
}
</style>
</head>
<body>
   <center>
        <div id="main-header">
        <div id="logo">
            <span id="IST">E-Jenga</span
                >
            
            </div>
        
      
            
        </div>
                 </center>
        </div>
       
               <BR>
  <BR>
  

   	
   	
	<?php include("include/header.php");?>
    <div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#343a40">
    <h1 style="color:#fff">Edit Products</h1></div>
    <div id="wrapper">
    <div id="header">
         <div id="subheader">
        
              <div class="container">
              <br><br><br><br><br>
   	<div class="container-fluid main-container">
       
	<div class="col-md-9 content" style="margin-left:50px">
  	<div class="panel panel-default">

	
	<div class="panel-body">
		<h3>
    <!-- end of center content -->
    <!-- end of right content -->
<!-- end of main_container -->

    <h5 class="card-title">Edit this Records <span class="text-danger"></span></h5>
    <form method="post" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>

    
    <div class="form-row">
     <div class="form-group">
	 <label for="inputState">Product Category</label>
    <select name="prd_cat" required>
      <option value="<?php echo $prd_cat;?>"><?php echo $cat_title ;?></option>
      <?php
      $get_cat = "select * from categories";
      $run_cat = mysqli_query($con,$get_cat);

      while($row_cat = mysqli_fetch_array($run_cat)){
      $cat_id = $row_cat['cat_id'];
      $cat_title = $row_cat['cat_title'];

      echo "
      <option value='$cat_id'>$cat_title</option>

      ";
      }
      ?>
	  </select>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;  
	    <div class="form-group">
            <label>Product Title <span class="text-danger"></span></label>
            <input type="text" name="prd_title" id="prd_title" value="<?php echo $prd_title; ?>" required>
        </div>
        <div class="form-group">
            <label>Product Price <span class="text-danger"></span></label>
            <input type="text" name="prd_price" id="prd_price" value="<?php echo $prd_price; ?>" required>
        </div>
        <div class="form-group">
            <label>Product Description <span class="text-danger"></span></label>
            <input type="text" name="prd_desc" id="prd_desc" value="<?php echo $prd_desc; ?>" required>
        </div>
      <div class="form-group">
	  <div class="container">
	  <div class="row">
	  <div class="col">
      <label>Product Image <span class="text-danger"></span></label>
	  </div>
      <div class="col">
	   <img width="150" height="150" src="../images/<?php echo $prd_img;?>" alt="<?php echo $prd_img;?>" >
	  </div>
      <br><br>
	  <div class="col">
      <input name="prd_img" type="file">
	  </div>
	  </div>
	  </div>
        <div class="form-group">
            <label>Product Keyword <span class="text-danger"></span></label>
            <input type="text" name="prd_keyword" id="prd_keyword" value="<?php echo $prd_keyword; ?>" required>
        </div>
        <div class="form-group">
            <label>Product Quantity <span class="text-danger"></span></label>
            <input type="text" name="prd_quantity" id="prd_quantity" width="48" height="48" value="<?php echo $prd_quantity; ?>" required>
        </div>
        <div class="form-group">
		<div class="col-sm-8">
			<button type="button" name="cancel" value="cancel" id="cancel" onClick="window.location='manage.php';" class="btn btn-primary">Cancel</button>
		</div>
		<div class="col-sm-4">
            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Update Record</button>
		</div>
        </div>
    </form>
</body>
</html>
		</div>
               
                
                    
        </div>
		
        <!-- main content area end -->
        <!-- footer area start-->
       
        <!-- footer area end-->
    </div>
	</div>
	</div>
	</div>
	</div>
	<div>
		</div>
	</div>
	</div>
	<div>
	
    <!-- page container area end -->
    <!-- offset area start -->
    
           
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51905a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>

   