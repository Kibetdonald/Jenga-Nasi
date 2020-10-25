<?php

$hostname = "localhost";

$user = "root";

$password = "";

$database = "electronix";

$db = mysql_connect($hostname,$user,$password) or die("Connection Failed........!!!");

mysql_select_db($database,$db) or die("Database not selected....!!!");

?>