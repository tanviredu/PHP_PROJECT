<?php require 'header.php' ?>

<body style="background: url('img/body.jpeg') no-repeat;background-size: cover" >

    
    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/hostel_management/config/config.php";
   // it will call function too
    include_once($path);
?>

    
    <center>

        <div class="container container-fluid" style="width: 1000px;margin-top:100px">
            <div class="card">
                <!--img class="card-img-top" src="img/4.jpg"-->
                <label><h2 class="display-4"><b>Occupied Room List</b></h2></label>
                <hr>
                
                <div class="card-body">
                    <h3 class="lead">Room  List</h3>
                    
                    
                    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Room</th>
    </tr>
  </thead>
<?php 
    // fetch the patient list of the doctor
    $query7 = "SELECT * FROM member";
    $result7 = make_query($query7);
    
    
    while($data7 = mysqli_fetch_assoc($result7)){
                        
?>
                        
                        
  <tbody>
    <tr>
      <td><?php echo $data7['name']; ?></td>
      <td><b><?php echo $data7['room']; ?> </b>(occupied)</td>
        
    </tr>
    
  </tbody>
                        
                        <?php  } ?>
</table>


                    
                </div>
            </div>
        
        </div>

    
    
</center>
    
    
    
    
    
<?php require 'footer.php' ?>