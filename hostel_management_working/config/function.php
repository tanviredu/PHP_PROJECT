<?php 
// redirect
function redirect($url){
	return header("Location: $url");
}
function make_query($sql){
    global $connection;
    $result=mysqli_query($connection,$sql);
    return $result;
    }
function confirm_query($result){
    global $connection;
    if(!$result){
       die("Query Failed" .mysqli_error($connection));
    }
}
function fetch_array($result){
    return mysqli_fetch_array($result);
}
function primary_validate($username,$password){
    if(!($username && $password)){
        return redirect('404.php');
    }
}
function page_not_found(){
	return redirect('404.php');
}

        
function processform(){
    // this will fetch the data
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        primary_validate($username,$password);
        $query1 = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result1 = make_query($query1);
        $data = fetch_array($result1);
       // echo $data;
        if($data){
            return redirect('home.php');
        }
        else{
            return redirect('404.php');
        }
        
        
        }
    }
            
function add_member($name,$department,$address,$mobile,$password){
    if($name && $department && $address && $mobile && $password){
    $insertsql = "INSERT INTO member (name, department, address,mobile,password) VALUES ('$name', '$department', '$address','$mobile','$password')";
    $result3=make_query($insertsql);
        if($result3){
            echo "<script>alert('successfully added record'); </script>";
          // echo $result3; 
            redirect('add_doctor.php');
        }

    }
    else{
        redirect('404.php');
    }
    
    
}



function add_new_member(){
    // this will fetch the data
    if (isset($_POST['add'])){
        $name = $_POST['name'];
        $department = $_POST['department'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        add_member($name,$department,$address,$mobile,$password);
}
}


function payment_status(){
    
}



function list_all_member(){

}



?>