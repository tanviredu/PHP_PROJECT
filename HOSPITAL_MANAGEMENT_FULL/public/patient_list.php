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
                <label><h2 class="display-4"><b>ONLINE MEDICAL PATIENT LIST</b></h2></label>
                <hr>
                
                <div class="card-body">
                    <h3 class="lead">Patient List</h3>
                    
                    
                    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Patient ID</th>
      <th scope="col">Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Time</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
<?php 
    // fetch the patient list of the doctor
    $query7 = "SELECT * FROM patient";
    $result7 = make_query($query7);
    
    
    while($data7 = mysqli_fetch_assoc($result7)){
                        
?>
                        
                        
  <tbody>
    <tr>
      <th scope="row"><?php echo $data7['patient_id']; ?></th>
      <td><?php echo $data7['name']; ?></td>
      <td><?php echo $data7['doctor_name']; ?></td>
      <td><?php echo $data7['time']; ?></td>
      <td><?php echo $data7['mobile']; ?></td>
        
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
