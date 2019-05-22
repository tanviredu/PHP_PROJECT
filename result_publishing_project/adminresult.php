<!DOCTYPE html>
<html>
<head>
	<title>result</title>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->
<?php 
	require_once('database.php');
?>




</head>
<body>

<center>
	<div class="jumbotron jumbotron-fluid">
		<h1>TOTAL RESULT</h1>
	</div>

</center>

<?php 
session_start();
	//fetch the data from the first
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$catagory = $_POST['catagory'];
	$table_name = 'ssc';

	//get the data tesing the data
	//echo $name;
	//echo $roll;
	//echo $catagory;

	//begin the query
	//prepare the sql
	$sql1 = "SELECT * FROM $table_name  ";

	//get the result 
	//mysql_query() takes two argument first $conn then $sql
	$results = mysqli_query($conn,$sql1);

	//see how much row is affected
	$count = mysqli_num_rows($results);

	//if results

	if ($results) {
		//echo $results;

		//up to all right
		//header("location:")
		$i=0;


		?>

		<table class="table table-boarded table-striped">

	<thead>
		
		<th><h4>Name</h4></th>
		<th><h4>Father Name</h4></th>
		<th><h4>Roll</h4></th>
		<th><h4>School</h4></th>
		<th><h4>Board</h4></th>
		<th><h4>GPA</h4></th>
	</thead>



		<?php
		while ($rows = mysqli_fetch_assoc($results)) {
			//echo $rows['name'];
			//echo $rows['father'];
			//echo $rows['roll'];
			//echo $rows['school'];
			//echo $rows['board'];
			//echo $rows['gpa'];
		
		//remember if statement and while loop are not 
			//finished yet

				?>

	<tbody>
		
		<tr>
		<td><b><?php echo $rows['name']; ?></b></td>
		<td><b><?php echo $rows['father']; ?></b></td>
		<td><b><?php echo $rows['roll']; ?></b></td>
		<td><b><?php echo $rows['school'] ?></b></td>
		<td><b><?php echo $rows['board'] ?></b></td>
		<td><b><?php echo $rows['gpa'] ?></b></td>

	</tr>
	</tbody>
	






<?php

		}
	}


?>
</table>


</body>
</html>