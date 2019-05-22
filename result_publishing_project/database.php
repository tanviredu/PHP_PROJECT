<?php
//the all connection will go there 
//open a database connection 

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'result';

$conn = mysqli_connect($host,$username,$password,$dbname);

if (!$conn) {
	//if there is no connection then
	die("Database connection failed ".mysqli_errno($conn));

}

else{
	//for testing purpose
	//echo "Successful";
}







?>