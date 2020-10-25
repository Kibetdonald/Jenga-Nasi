<?php 
session_start();
if(isset($_SESSION['Email_Id'])&& $_SESSION['Email_Id']!="")
{}
else
{
   header("location:http://localhost/project/Login.php");http://localhost/project/Login.php
}

$inactive=1000;
if(isset($_SESSION['timeout']))
{
	$sessionttl=time()- $_SESSION['timeout'];
	if($sessionttl > $inactive)
	{
	session_destroy();
	header("location:logout.php");	
	}	
}
$_SESSION['timeout']=time();
?>