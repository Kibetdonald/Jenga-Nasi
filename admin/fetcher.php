<html>
 <head>
  <title>Orders Report</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="Style.css">
  <link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">

  <style>
   body
   {
    margin:0;
    
    padding:0;
    background-color:#f1f1f1;
   }
   .box

   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
  

 </head>
 <body><center>
                   <div id="main-header">
                   <div id="logo">
                       <span id="IST">E-Jenga</span
                           >
                       
                       </div>
                   
                 
                       
                   </div>
                            </center>
                   </div>
                   
        
               
        
    <br><br>
<?php include("include/header.php"); ?>


<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#343a40">
<h1 align="center" style="color:#ffffff">Orders</h1>
  </div>
  
   <br />
   <div class="table-responsive">
    <br />
    <div class="row">
     <div class="input-daterange">
      <div class="col-md-4">
      <h6>Start Date:</h6>
       <input type="text" name="start_date" id="start_date" class="form-control" />
      </div>
      <div class="col-md-4">
        <h6>End Date:</h6>
       <input type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
     <div class="col-md-4">
      <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     </div>
    </div>
    <br />
    <table id="order_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Order ID</th>
       <th>User ID</th>
         <th>Amount</th>
       <th>Invoice Number</th>
       <th>Product Id</th>
       <th>Quantity</th>
       <th>Order Date</th>
       <th>Order Status</th>
      
      </tr>
     </thead>
    </table>
    <center><button onClick="window.print()">Print Orders</button></center>

    
   </div>
  </div>

 </body>
</html>



<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fetch.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>
