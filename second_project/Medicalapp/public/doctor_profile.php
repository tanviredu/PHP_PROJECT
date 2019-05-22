
<?php require '../connection.php'; ?>
<?php include 'header.php' ?>




<?php
$docusername = $_POST['docusername'];
$docpassword = $_POST['docpassword'];
$docdpt = $_POST['docdpt'];
?>


<div class="container" style="margin-top:300px">
    <div class='card'>
        <div class="card-body" style="background-color:azure;">
           <h3> <b><label>Patient Details</label> </b></h3>
           
           <div class='container'>
               <form class="form-group" action="search_result.php" method="POST">
               <input type="text" name="search" class="form-control" placeholder="Enter First name..">
               <input type="submit" name="submit_search" value="Search Patient" class="btn btn-primary">

               </form>
            </div>
    
    </div>
    </div>
    <div class="card-body" style="background-color:azure;">
        <table class="table table-hover">

        
        
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Department</th>
                    <th>Time</th>
                    <th>Contact</th>
                    <th>Doctor Apoinment</th>
                    <th>DELETE</th>


                </tr>

            </thead>
            <tbody>

            <?php 
            $query2 = "SELECT * FROM appoinment WHERE doctorapp='$docusername' AND password='$docpassword' AND department='$docdpt'";
            $result2 = mysqli_query($conn, $query2);
            while ($rows1 = mysqli_fetch_assoc($result2)) {

                ?>
                <tr>
                    <th><?php echo $rows1['fname']; ?></th>
                    <th><?php echo $rows1['lname']; ?></th>
                    <th><?php echo $rows1['department']; ?></th>
                    <th><?php echo $rows1['Time']; ?></th>
                    <th><?php echo $rows1['contact']; ?></th>
                    <th><?php echo $rows1['doctorapp']; ?></th>
                    <th><a href="../func.php?username=<?php echo $rows1['fname']; ?>"><button class='btn btn-danger'> DELETE</button></a></th>

                    
                    


                </tr>
            <?php 
        } ?>
            </tbody>
        </table>

    </div>
</div>


<?php include 'footer.php' ?>
