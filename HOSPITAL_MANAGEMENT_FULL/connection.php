<?php

$HOST='localhost';
$USER ='root';
$PASSWORD='';
$DATABASE='medical_admin';
$conn = mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE);

if(!$conn){
    Die("connection not avilable");
}
    
?>