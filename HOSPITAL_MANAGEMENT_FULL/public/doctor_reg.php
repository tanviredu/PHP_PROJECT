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
                    <label><h3>Doctor login</h3></label><br />
                    <label>Username: </label><br />
                    <input style="width:400px;" type="text" name="docusername" class="from-control" placeholder="Enter Username"><br />
                    <label>password: </label><br />
                    <input style="width:400px;" type="text" name="docpassword" class="from-control" placeholder="Enter Password"><br /> <br/>
                    <input style="width:400px;" type="submit" name="docsubmit" class="btn btn-outline-danger">
                    </form>
                    </center> 
                </div>
            </div>
        
        </div>
            
    
        <?php
        
        // start the session to store doctor name
        session_start();
    
        
        function processformdoctor(){
        if (isset($_POST['docsubmit'])){
            $docusername = $_POST['docusername'];
            $docpassword = $_POST['docpassword'];
            #primary_validate($docusername,$docpassword);
            $query2 = "SELECT * FROM doctor WHERE name='$docusername' AND password='$docpassword'";
            $result2 = make_query($query2);
            $data2 = fetch_array($result2);
            //echo $data2;
            if($data2){
                $_SESSION['docname'] = $data2['name'];
                return redirect('docprofile.php');
            }
         else{
                return redirect('404.php');
            }
            
            
        }
        }
            
        
        processformdoctor();
        
        ?>
 </body>

<?php require 'footer.php'; ?>