<?php include 'header.php' ?>
<body>
<?php include 'nav.php' ?>
</body>
<?php include 'footer.php' ?>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/hostel_management/config/config.php";
   // it will call function too
    include_once($path);
?>
<center>
<form class="form-user" action="" method="POST">
	<label><h1 class="display-4">Search Member </h1></label><br />
	<input style="width:500px;height: 70px;" type="text" name="name" class="from-control" placeholder="Enter name"><br /><br />
	<input style="width:500px;height: 70px;" type="submit" name="search" value="search" class="btn btn-danger">
</form>

</br>
</br>
</br>


<div class="container container-fluid" style="width: 1000px;margin-top:100px">
            <div class="card">
                <!--img class="card-img-top" src="img/4.jpg"-->
                <label><h2 class="display-4"><b>Member List</b></h2></label>
                <hr>
                
                <div class="card-body">
                    
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Room</th>
      <th scope="col">Mobile</th>
      <th scope="col">address</th>
      <th scope="col">Department</th>
    </tr>
  </thead>

<?php 
		if (isset($_POST['search'])){
			$name = $_POST['name'];
		}
	  $query7 = "SELECT * FROM member WHERE name LIKE '%$name%'";
	  $result7 = make_query($query7);
	  
	  
	  while($data7 = mysqli_fetch_assoc($result7)){
		// make the table      
	
	
?>

<tbody>
    <tr>
      <td><?php echo $data7['name']; ?></td>
      <td><?php echo $data7['room']; ?></td>
      <td><?php echo $data7['mobile']; ?></td>
      <td><?php echo $data7['address']; ?></td>
      <td><?php echo $data7['department']; ?></td>

        
    </tr>
    
  </tbody>
                        
                        <?php  } ?>
</table>
              
</div>
            </div>
        
        </div>

    
    
</center>

                    
</center>
