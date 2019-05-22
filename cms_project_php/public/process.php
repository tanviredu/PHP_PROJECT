<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>




<?php
    //taking input from the user
    if (isset($_POST['submit'])) {
    	if (isset($_POST['username']) && isset($_POST['password']) ){
    		$username = checkinput($_POST['username']);
    		$password = checkinput($_POST['password']);
    		if(checkerrors($username,$password)){
    		//$on_query = "SELECT * FROM admins WHERE username = '{$username}' AND hashed_password = '{$password}' ";
			//$on_result = mysqli_query($connection,$on_query);
			if(checkusername($username,$password)){
				//header("location: manage_content.php");
			
				redirect_to('manage_content.php');
			}

			else{
				//header("location: 404.html");
				redirect_to('404.html');
			}
			//while ($ans=mysqli_fetch_assoc($on_result)) {
			//	echo $ans['username'];
			//}
    		}
    		else
    		{
    			redirect_to('404.html');
    		}
    	}

    }
?>
