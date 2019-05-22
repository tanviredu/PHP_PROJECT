<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'process.php'; ?>
<form method="POST" action="">
	<input type="text" name="username" placeholder="username">
	<input type="password" name="password" placeholder="password"> </br>
	<input type="submit" name="submit">


</form>
</body>
</html>

<?php
		//taking input from the user
		if (isset($_POST['submit'])) {
			
			//create the login object
			$object = new login(); // this will start the connection
			$object->insertintodb($_POST['username'],$_POST['password']);
			//if errors occur we will print it
			foreach ($object->errors as $error) {
				
				echo $error;
			}
		}
		else{
			echo "error";
		}
?>
