<?php require 'header.php' ?>


<body style="background: url('img/1.jpg') no-repeat;background-size: cover" >
    
    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/HOSPITAL_MANAGEMENT_FULL/config.php";

   include_once($path);
?>



        <div class="container container-fluid" style="width: 500px;margin-top:100px">
            <div class="card">
                <img class="card-img-top" src="img/4.jpg">
                
                
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
            
    
        <?php
        
        
        function processform(){
        if (isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            primary_validate($username,$password);
            $query1 = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result1 = make_query($query1);
            $data = fetch_array($result1);
           // echo $data;
            if($data){
                return redirect('admin.php');
            }
         else{
                return redirect('404.php');
            }
            
            
        }
        }
            
        
        processform();
        
        ?>
 </body>

<?php require 'footer.php'; ?>