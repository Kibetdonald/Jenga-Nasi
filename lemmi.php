



<?php
//connect to the database
$con=mysqli_connect("localhost","root", "");
if(!$con)
{
  echo ("Connection to the database Engine Failed");

}

else{

  echo("Established connection successfully");
}
//select database for use
mysqli_select_db($con,"isproject") or die("could not select the database");

//receive form data and store in variable
//$id=$_POST['id'];
//$name=$_POST['name'];
//$age=$_POST['age'];
 //executing a query to insert data into a table

//mysqli_query($con,"insert into student (studid,sname,age) values('$id','$name','$age')");
//echo "<a href=contact.php>Add another record</a>";
$query = $con->query("SELECT * FROM buyerimages  ");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'upload/'.$row["name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" height="200" width="200"/>
<?php }
}

else{  echo "no images found";} 
//close connection
mysqli_close($con);


?>
