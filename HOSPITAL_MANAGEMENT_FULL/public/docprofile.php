<?php require 'header.php' ?>


<body style="background: url('img/1.jpg') no-repeat;background-size: cover" >
    
    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/HOSPITAL_MANAGEMENT_FULL/config.php";

   include_once($path);

    session_start();
?>

    
    <center>

        <div class="container container-fluid" style="width: 1000px;margin-top:100px">
            <div class="card">
                <!--img class="card-img-top" src="img/4.jpg"-->
                <label><h2 class="display-4">welcome doctor<b> <?php echo $_SESSION['docname'];?></b></h2></label>
                <hr>
                
                <div class="card-body">
                    <h3 class="lead">Patient Appoinment List</h3>
                    
                    
                    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Appoinment id</th>
      <th scope="col">Name</th>
      <th scope="col">time</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
<?php 
    $docname = $_SESSION['docname'];
    // fetch the patient list of the doctor
    $query3 = "SELECT * FROM patient WHERE doctor_name='$docname'";
    $result3 = make_query($query3);
    
    
    while($data3 = mysqli_fetch_assoc($result3)){
                        
?>
                        
                        
  <tbody>
    <tr>
      <th scope="row"><?php echo $data3['patient_id']; ?></th>
      <td><?php echo $data3['name']; ?></td>
      <td><?php echo $data3['time']; ?></td>
      <td><a href="process.php?patient_id=<?php echo $data3['patient_id']; ?>"><button class="btn btn-danger">Delete</button></td>
    </tr>
    
  </tbody>
                        
                        <?php  } ?>
</table>


                    
                </div>
            </div>
        
        </div>

    
    
</center>
    
    <?php 

    ?>
    
    
    
    
    
<?php require 'footer.php' ?>

    
    
    
    
    
    
    
