<?php
//this process the login information

session_start();
require 'connection/connection.php';
if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    
    //create databasr search
    
    if($status=='admin'){
        $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
            
            $result = mysqli_query($conn,$query);
            
        //check the data if there is 
        if(mysqli_num_rows($result)!=0){
            
            header("Location:public/admin.php");
        }
        
    }else{
        
        $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
            
            $result = mysqli_query($conn,$query);
            
        //check the data if there is 
        if(mysqli_num_rows($result)!=0){
            $_SESSION['username'] = $username;
            header("Location:public/blog/index.php");
        }
        
        
        
        
        
    }
    
    
    
}


if(isset($_POST['submitreg'])){

    
    //create database search
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($fullname && $username && $gender && $password && $repassword) {
		//prepare query
		$query1 = "INSERT INTO register(fullname,username,password,repassword)VALUES('$fullname','$username','$password','$repassword')";
		$result1 = mysqli_query($conn, $query1);
		if (mysqli_affected_rows($conn)); {  // if any rows are affected
            $query2 = "INSERT INTO login(username,password)VALUES('$username','$password')";
            $result2 = mysqli_query($conn, $query2);
            
            if($result2){
            header("Location:public/index.html");
            }
            
		} 



	}
   else{
        echo 'problem input data';
    }
    
    
    
}
    
    
        

    
    




?>