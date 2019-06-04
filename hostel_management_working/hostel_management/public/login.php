<?php require 'header.php' ?>
<body style="background: url('img/body.jpeg') no-repeat;background-size: cover" >
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/hostel_management/config/config.php";
   // it will call function too
    include_once($path);
?>
<center>
<div class="container container-fluid" style="width: 500px;margin-top: 200px">
    
    <div class="card">
        
            <img class="card-img-top" src="img/cardtop.jpg">
                <div class="card-body">
            <!-- form goes here -->
                <div class="card-body">
                    
                    <center>
                    <form class="form-user" action="" method="POST">
                    <label>Username: </label><br />
                    <input style="width:400px;" type="text" name="username" class="from-control" placeholder="Enter Username"><br />
                    <label>password: </label><br />
                    <input style="width:400px;" type="text" name="password" class="from-control" placeholder="Enter Password"><br /> <br/>
                    <input style="width:400px;" type="submit" name="submit" class="btn btn-outline-danger">
                    </form>
                    </center> 
                </div>
                
                </div>
    </div>

</div>

</center>
<?php
processform()

?>



<?php require 'footer.php'; ?>