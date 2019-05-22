<?php


//this function is for validating the sql query

function confirm_query($result)
{
	if (!$result) {
		die("database connection failed");
	}
}



// this function is for finding all the subjects





function find_all_subjects()
{
global $connection;
$query = "SELECT * FROM subjects WHERE visible = 1 ORDER BY  position ASC ";
$result = mysqli_query($connection,$query);

//check the query

confirm_query($result);
return $result;
}



function find_all_pages($foreign_id)
{
global $connection;


$page_query = "SELECT * FROM pages WHERE visible = 1 AND subject_id = $foreign_id ORDER BY  position ASC ";
$page_result = mysqli_query($connection,$page_query);

		//check the query

confirm_query($page_result);
return $page_result;
}


function find_subjects_by_id($subject_id){
global $connection;
$one_sub_query = "SELECT * FROM subjects WHERE id = {$subject_id} LIMIT 1 ";
$result1 = mysqli_query($connection,$one_sub_query);
//there is only one row we dont have to loop through
confirm_query($result1);
if($subject_name = mysqli_fetch_assoc($result1)){
return $subject_name;
}
else{
	header("Location: 404.html");
}



}
function find_pages_by_id($page_id){
global $connection;
$one_page_query = "SELECT * FROM pages WHERE id = {$page_id} LIMIT 1 ";
$result2 = mysqli_query($connection,$one_page_query);
//there is only one row we dont have to loop through
confirm_query($result2);
if($page_name = mysqli_fetch_assoc($result2)){
return $page_name;
}
else{
	header("Location: 404.html");
}



}


// the authentication function starts here


function checkinput($var){
	$var = htmlspecialchars($var);
	$var=trim($var);
	$var=stripslashes($var);
	//removing the special chars
	//trimming
	//and other thins
	return $var;
	}


function checkerrors($username,$password){
		//set the username not more than 10 less than 4
		//this is acctually logging 
		if (strlen($username)>10 || strlen($username)< 3) {
			return false;
			
		}
		if (strlen($password)<4 || strlen($password)>15) {
			return false; 
		}
		return true;
	}

function checkusername($username,$password){
		global $connection;	
		$check_query = "SELECT username FROM admins WHERE username = '{$username}' AND hashed_password = '{$password}' ";
		mysqli_query($connection,$check_query);
		if (mysqli_affected_rows($connection)>0) {
				return true;
			}
			else{
				return false;
	}		
}


function check($username,$password){
		
		$username=checkinput($username);
		$pass=checkinput($password);
		if(checkerrors($username,$pass)){
			 
		
			if(checkusername($username,$pass)){
				return true;
			}



		}
				}
				

//redirection function starts here

function redirect_to($new_location){
	header("Location: " .$new_location);
	exit;
}



//mysql preparetion function starts here


function mysql_prep($string){
	global $connection;

	$escaped_string = mysqli_real_escape_string($connection,$string);
	return $escaped_string;
}

function wait_and_redirect($time,$location){
		echo "<meta http-equiv='refresh' content='$time;url=$location'>";
}





//subject title length validation starts here


function subject_length_validate($menu_name){
		//set the username not more than 10 less than 4
		//this is acctually logging 
		if (strlen($menu_name)>15 || strlen($menu_name)< 3) {
			return 0;
		}
		else{
			return 1;
		}
		
	}

?>