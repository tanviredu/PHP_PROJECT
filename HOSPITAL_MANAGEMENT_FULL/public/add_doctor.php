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
                    <h1 class='display-4'><b>Add Doctor</b></h1>
                    <hr>
                
                
                <div class="card-body">
                    
                    <center>
                    <form class="form-user" action="" method="POST">
                    
                    <label class="lead">Doctor name: </label><br />
                    <input type="text" style="width:400px;" name="doctor_name" class="from-control" placeholder="Enter doctor name"><br />
                        
                   
                     <div class="form-group">
                        <label for="sel1"> <label class="lead">Department: </label><br /></label>
                        <select style="width:400px;" class="form-control" name='doctor_department'>
                            
                <?php // create doc list 
            $docquery = "SELECT * FROM Department";
            $docresult = make_query($docquery);
            while($name = mysqli_fetch_assoc($docresult)){        
                    
                ?>
                            
                            
                            
                        <option value='<?php echo $name['Department_name'] ?>'><?php echo $name['Department_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div> 

                        
                    <label class="lead">Post: </label><br />
                    <input type="text" style="width:400px;" name="post" class="from-control" placeholder="Enter Post"><br />
                        
                        
                    <label class="lead">mobile: </label><br />
                    <input type="text" style="width:400px;" name="mobile" class="from-control" placeholder="Enter patient mobile"><br />
                        
                        
                    <label class="lead">Password: </label><br />
                    <input style="width:400px;" type="text" name="password" class="from-control" ><br />
                            
                        
                        
                        <br />
                    <input type="submit" style="width:400px;" name="doctorsubmit" class="btn btn-danger">
                    </form>
                    </center> 
                </div>
            </div>
                
                </center>
        
        </div>
            
    
        
        
    
    <?php
    // fetching post request
    
    if (isset($_POST['doctorsubmit'])){
    
    $doctor_name = $_POST['doctor_name'];
    $doctor_department = $_POST['doctor_department'];
    $doctor_post = $_POST['post'];
    $doctor_mobile = $_POST['mobile'];
    $doctor_password = $_POST['password'];
    
    //echo $doctor_name;
    //echo $doctor_department;
    //echo $doctor_post;
    //echo $doctor_mobile;
    //echo $doctor_password;
    add_doctor($doctor_name,$doctor_department,$doctor_post,$doctor_mobile,$doctor_password);
    }
    
    
    
    
    ?>
    
    
        
        
        
<?php require 'footer.php' ?>   