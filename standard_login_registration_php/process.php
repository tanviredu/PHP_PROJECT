<?php
class login{
	protected $localhost="localhost";
	protected $user = "root";
	protected $pass = "";
	protected $db="con";
	protected $conn;
	//new variable is needed to store the errors
	public $errors = array();
	function __construct(){
					//when the class has been initilized this 
					//function will automatically executed
		$this->conn = mysqli_connect($this->localhost,$this->user,$this->pass,$this->db);
		//echo $this->conn;
	}
	protected function checkinput($var){
		$var = htmlspecialchars($var);
		$var=trim($var);
		$var=stripslashes($var);
		//removing the special chars
		//trimming
		//and other thins
		return $var;
	}
	public function insertintodb($username,$password){
		
		$username=$this->checkinput($username);
		$pass=$this->checkinput($password);
		if($this->checkerrors($username,$pass)){
			//if the statement is true
			//we reload the array to a  new value 
		}
		if($this->checkusername($username)){
				
				if($this->insertDB($username,$pass)){
					$this->errors=['successfully inserted into database'];
				}
	}
}
	protected function checkerrors($username,$password){
		//set the username not more than 10 less than 4
		//this is acctually logging 
		if (strlen($username)>10 || strlen($username)< 3) {
			array_push($this->errors, "username has more than 10 character");
			return false;
		}
		if (strlen($password)<4 || strlen($password)>15) {
			array_push($this->errors, "password is less than 4 character");
			return false; 
		}
		return true;
	}
	//sql commands start here
	protected function insertDB($username,$password){
		//insert query
		$query = "INSERT INTO users(username,password) VALUES('".$username."','".$password."')";
		mysqli_query($this->conn,$query);
		if (mysqli_affected_rows($this->conn)>0) {
		
				return true;
			}
			else{
				return false;
	}
}
//checked for user that already regestered
protected function checkusername($username){
		$query = "SELECT username FROM users WHERE username='" .$username. "'";
		mysqli_query($this->conn,$query);
		if (mysqli_affected_rows($this->conn)>0) {
		
				array_push($this->errors, "Username already exists use different one");
				return false;
			}
			else{
				return true;
	}		
}
}
?>
