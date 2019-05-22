<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/php_1_project_blog/connection/connection.php";
   include_once($path);
?>
<?php require 'header.php' ?>
<?php

if(isset($_POST['submitpost'])){

    
    //create database search
    $title = $_POST['title'];
    $des = $_POST['post'];
    $username = $_SESSION['username'];
    
    
    
    if ($title && $des && $username) {
		//prepare query
		$query5 = "INSERT INTO blog(username,title,des,date)VALUES('$username','$title','$des',now())";
		$result5 = mysqli_query($conn, $query5);
		if (mysqli_affected_rows($conn)) {  // if any rows are affected
            header("Location:public/index.html");
        
        }
    
    
    }

}
?>

<?php require 'footer.php' ?>