

<?php 
require '../connection.php';

$sql = "SELECT * FROM doctor";

$results = mysqli_query($conn,$sql);


while ($rows = mysqli_fetch_assoc($results)) {
			echo $rows['fname'];
}
				


 ?>