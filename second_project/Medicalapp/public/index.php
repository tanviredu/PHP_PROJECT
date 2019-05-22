<!DOCTYPE html>
<html>
<head>
	<title> Login Pagr</title>
	<link rel="stylesheet" type="text/css" href="static/bootstrap.css">
</head>
<body style="background: url('img/1.jpg') no-repeat;background-size: cover;">

<div class="container container-fluid" style="width: 500px;margin-top: 200px">
<div class="card">
	<img src="img/4.jpg" class="card-img-top">
	<div class="card-body">
<center>

		<form class="form-group" action="../func.php" method="POST">
			<label>Username: </label>
			<input type="text" name="username" class="form-control" placeholder="Enter Username">
			<label>Password: </label>
			<input type="text" name="password" class="form-control" placeholder="Enter Password">
		</br>
			<input type="submit" class="btn btn-outline-danger" name="submit"  class="form-control" >


		</form>
		</center>
	</div>
</div>
</div>

</div>






</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="static/bootstrap.js"></script>
</html>