<?php
//this is a  extension of config

//query database

function redirect($url){
    return header("Location: $url ");
}


function make_query($sql){
    
    global $connection;
    
    return mysqli_query($connection,$sql);
    
}


function confirm_query($result){
    
    global $connection;
    
    if(!$result){
        
        die("Query Failed" .mysqli_error($connection));
    }
}


function escape_string($string){
    
    global $connection;
    
    return mysqli_real_escape_string($connection,$string);
}



//while($row = fetch_array($category_query)) {

//$user_id = $row['user_id'];


function fetch_array($result){
    
    return mysqli_fetch_array($result);
}


function primary_validate($username,$password){
    if(!($username && $password)){
        
        return redirect('404.php');
    }
    
}



function insert_data($patient_id,$patient_name,$doctor_name,$mobile,$time){
    if($patient_id && $patient_name && $doctor_name && $mobile && $time){
    $insertsql = "INSERT INTO patient (patient_id, name, doctor_name,mobile,time) VALUES ('$patient_id', '$patient_name', '$doctor_name','$mobile','$time')";
    $result3=make_query($insertsql);
        if($result3){
            
          //  echo "<script>alert('successfully added record'); </script>";
           echo $result3; 
            redirect('appoinment.php');
        }

    }
    else
    
    {
        redirect('404.php');
    }
    
    
}



function add_doctor($name,$department,$post,$mobile,$password){
    if($name && $department && $post && $mobile && $password){
    $insertsql = "INSERT INTO doctor (name, department, post,mobile,password) VALUES ('$name', '$department', '$post','$mobile','$password')";
    $result3=make_query($insertsql);
        if($result3){
            
          //  echo "<script>alert('successfully added record'); </script>";
           echo $result3; 
            redirect('add_doctor.php');
        }

    }
    else
    
    {
        redirect('404.php');
    }
    
    
}






?>