<?php 
// host user password database
require 'connection.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	//make the queryset
	$query = "SELECT * FROM logindb WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) != 0) {  // if any rows are affected

		header("Location:public/admin.php");

	} else {
		echo "<script>alert('Wrong Credential')</script>";
		header("Location:public/index.php");


	}
}

if (isset($_POST['submit_add'])) {
	//fetch data
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$department = $_POST['dpt'];
	$contact = $_POST['contact'];
	$doctor = $_POST['docapp'];
	$time = $_POST['time'];

	if ($fname && $lname && $contact && $doctor && $time) {
		//prepare query
		$query = "INSERT INTO appoinment(fname,lname,department,contact,doctorapp,time)VALUES('$fname','$lname','$department','$contact','$doctor','$time')";
		$result1 = mysqli_query($conn, $query);
		if (mysqli_num_rows($result1) != 0) {  // if any rows are affected

			header("Location:public/admin.php");

		} else {
			header("Location:public/admin.php");

		}



	}


}

if ($username = $_GET['username']) {
	$query = "DELETE FROM `appoinment` WHERE fname='$username' ";
	$result1 = mysqli_query($conn, $query);
}

?>