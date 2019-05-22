<!DOCTYPE html>
<html>
<head>
	<title>result</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
	require_once('database.php');
?>




</head>
<body>
<?php 
session_start();
	//fetch the data from the first
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$catagory = $_POST['catagory'];
	$table_name = 'ssc';

	//get the data tesing the data
	//echo $name;
	//echo $roll;
	//echo $catagory;

	//begin the query
	//prepare the sql
	$sql = "SELECT * FROM $table_name WHERE roll='$roll' AND board = '$catagory' ";

	//get the result 
	//mysql_query() takes two argument first $conn then $sql
	$results = mysqli_query($conn,$sql);

	//see how much row is affected
	$count = mysqli_num_rows($results);

	//if results

	if ($results) {
		//echo $results;

		//up to all right
		//header("location:")
		$i=0;
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
<table class="table table-boarded table-striped">

	<thead>
		
		<th><h4>Name</h4></th>
		<th><h4>Father Name</h4></th>
		<th><h4>Roll</h4></th>
		<th><h4>School</h4></th>
		<th><h4>GPA</h4></th>
	</thead>
	<tbody>
		
		<tr>
		<td><b><?php echo $rows['name']; ?></b></td>
		<td><b><?php echo $rows['father']; ?></b></td>
		<td><b><?php echo $rows['roll']; ?></b></td>
		<td><b><?php echo $rows['school'] ?></b></td>
		<td><b><?php echo $rows['gpa'] ?></b></td>

	</tr>
	</tbody>
	

</table>




<?php

		}
	}


?>



</body>
</html>