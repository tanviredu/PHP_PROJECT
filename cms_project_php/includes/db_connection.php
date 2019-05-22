<?php
//start the database connection

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "widget_cms";

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//test the connection 

if (!$connection) {
	die("Database connection Failed");
}
else  {
      // do nothing this block is testing purpose
}


?>