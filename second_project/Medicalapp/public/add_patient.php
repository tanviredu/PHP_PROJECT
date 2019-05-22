<?php require '../connection.php'; ?>
<?php include 'header.php' ?>

<center>
	
	<div class="container container-fluid" style="width:500px;margin-top: 150px;">
		<div class="card">
			<img src="img/4.jpg" class="card-img-top">
			<div class="card-body">
				<form class="form-group" action="../func.php" method="POST">
					<label>First name</label>
					<input class="form-control" type="text" name="fname">
					<label>Last name</label>
					<input class="form-control" type="text" name="lname">
					<label>Department</label>
					<select class="form-control" name="dpt">
						<option value='Surgery'>Surgery</option>
						<option value='Medecin'>Medecin</option>
						<option value='Emergency'>Emergency</option>
						<option value='Skin'>Skin</option>
						<option value='ENT'>ENT</option>


					</select>
					<label>Contact</label>
					<input class="form-control" type="text" name="contact">
					<label>Time</label>
					<input class="form-control" type="text" name="time">

					<label>Doctor Appointment</label>
					<select class="form-control" name="docapp">
				<?php $sql1 = "SELECT * FROM doctor";
			$result1 = mysqli_query($conn, $sql1);
			while ($rows = mysqli_fetch_assoc($result1)) {

				?>
						<option value=<?php echo $rows['fname'] ?> ><?php echo $rows['fname'] ?></option>
						
					<?php 
			} ?>
			
				
					</select>
				</br>
					<input type="submit" name="submit_add" class="btn btn-danger">
				</form>
			</div>			

		</div>
	</div>
</center>

<?php include 'footer.php' ?>