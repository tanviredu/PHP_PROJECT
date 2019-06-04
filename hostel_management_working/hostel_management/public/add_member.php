<?php require 'header.php' ?>
<body style="background: url('img/body.jpeg') no-repeat;background-size: cover" >
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/hostel_management/config/config.php";
   // it will call function too
    include_once($path);
?>
<center>
<div class="container container-fluid" style="width: 800px;margin-top: 100px">
    
    <div class="card">
        
            <img class="card-img-top" src="img/cardtop.jpg">
                <div class="card-body">
            <!-- form goes here -->
                <div class="card-body">
                    
                    <center>
                    <form class="form-user" action="" method="POST">
                    <label>Name: </label><br />
                    <input style="width:700px;" type="text" name="name" class="from-control" placeholder="Enter name"><br />
                    <label>Department: </label><br />
                    <input style="width:700px;" type="text" name="department" class="from-control" placeholder="Enter Username"><br />
                    <label>address: </label><br />
                    <input style="width:700px;height:150px;" type="text" name="address" class="from-control" placeholder="Enter Username"><br />
                     <label>Mobile: </label><br />
                    <input style="width:700px;" type="text" name="mobile" class="from-control" placeholder="Enter Username"><br />
                    <label>Room No: </label><br />
                    <input style="width:700px;" type="text" name="room" class="from-control" placeholder="Enter room no"><br />
                    <label>password: </label><br />
                    <input style="width:700px;" type="text" name="password" class="from-control" placeholder="Enter Password"><br /> <br/>
                    <label>payment: </label><br />
                    <input style="width:700px;" type="text" name="payment" class="from-control" placeholder="Enter Password"><br /> <br/>
                    <input style="width:700px;" type="submit" name="add" value="add" class="btn btn-outline-danger">
                    </form>
                    </center> 
                </div>
                
                </div>
    </div>

</div>

</center>
<?php
 add_new_member();

?>



<?php require 'footer.php'; ?>