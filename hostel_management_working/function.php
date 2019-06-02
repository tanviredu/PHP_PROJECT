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
function fetch_array($result){
    return mysqli_fetch_array($result);
}
function primary_validate($username,$password){
    if(!($username && $password)){
        return redirect('404.php');
    }
}
?>