<?php require 'header.php' ?>


    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/HOSPITAL_MANAGEMENT_FULL/config.php";

   include_once($path);
?>




<body style="background: url('') no-repeat;background-size: cover;margin-top:20px;" >

        
        <div class="container container-fluid" style="width: 1000px;margin-top:100px">
            <div class="card">
                <center>
                    <h1 class='display-4'><b>Patient Appoinment information</b></h1>
                    <hr>
                
                
                <div class="card-body">
                    
                    <center>
                    <form class="form-user" action="insert.php" method="POST">
                    <label class="lead">patient id: </label><br />
                    <input style="width:400px;" type="text" name="patient_id" class="from-control" placeholder="Enter patient id"><br />
                    
                    <label class="lead">patient name: </label><br />
                    <input type="text" style="width:400px;" name="patient_name" class="from-control" placeholder="Enter patient name"><br />
                        
                   
                     <div class="form-group">
                        <label for="sel1"> <label class="lead">Doctor: </label><br /></label>
                        <select style="width:400px;" class="form-control" name='doctor_name'>
                            
                <?php // create doc list 
            $docquery = "SELECT name FROM doctor";
            $docresult = make_query($docquery);
            while($name = mysqli_fetch_assoc($docresult)){        
                    
                ?>
                            
                            
                            
                        <option value='<?php echo $name['name'] ?>'><?php echo $name['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div> 

                    <label class="lead">mobile: </label><br />
                    <input type="text" style="width:400px;" name="mobile" class="from-control" placeholder="Enter patient mobile"><br />
                        
                        
                    <label class="lead">Time: </label><br />
                    <input style="width:400px;" type="time" name="time" class="from-control" ><br />
                            
                        
                        
                        <br />
                    <input type="submit" style="width:400px;" name="submit" class="btn btn-danger">
                    </form>
                    </center> 
                </div>
            </div>
                
                </center>
        
        </div>
            
    
        
        
        
        
        
<?php require 'footer.php' ?>