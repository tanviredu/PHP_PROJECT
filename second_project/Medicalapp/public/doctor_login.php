<?php require '../connection.php'; ?>
<?php include 'header.php' ?>


<div class="container container-fluid" style="width: 500px;margin-top: 200px">
 <div class="card">
	<img src="img/4.jpg" class="card-img-top">
	<div class="card-body">
 <center>

		<form class="form-group" action="doctor_profile.php" method="POST">
			<label>Doctor Username: </label>
			<input type="text" name="docusername" class="form-control" placeholder="Enter Username">
			<label>Doctor Password: </label>
			<input type="text" name="docpassword" class="form-control" placeholder="Enter Password">
		</br>
            <select class="form-control" name="docdpt">
				<?php $sql3 = "SELECT * FROM appoinment";
			$result3 = mysqli_query($conn, $sql3);
			while ($rows = mysqli_fetch_assoc($result3)) {

				?>
						<option value=<?php echo $rows['department'] ?> ><?php echo $rows['department'] ?></option>
						
					<?php 
			} ?>
			
				
                    </select>
			<input type="submit" class="btn btn-outline-danger" name="doc_submit"  class="form-control" >
                    

		</form>
		</center>
	</div>
 </div>
</div>

<?php include 'footer.php' ?>
