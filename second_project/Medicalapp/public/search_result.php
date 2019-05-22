<?php include '../connection.php' ?>
<?php include 'header.php' ?>

<body>

<div class="container" style="margin-top:300px">
    <div class='card'>
        <div class="card-body" style="background-color:azure;">
           <h3> <b><label>Patient Details</label> </b></h3>
           
           
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

                </tr>

            </thead>
            <tbody>
               
            <?php 
                //fetch the data first
            $fname = $_POST['search'];
            //echo $fname;
            $query2 = "SELECT * FROM appoinment WHERE fname='$fname' ";
            $result2 = mysqli_query($conn, $query2);
            while ($rows2 = mysqli_fetch_assoc($result2)) {

                ?>
                 <tr>
                    <th><?php echo $rows2['fname']; ?></th>
                    <th><?php echo $rows2['lname']; ?></th>
                    <th><?php echo $rows2['department']; ?></th>
                    <th><?php echo $rows2['Time']; ?></th>
                    <th><?php echo $rows2['contact']; ?></th>
                    <th><?php echo $rows2['doctorapp']; ?></th>
                    


                </tr>
 

                <?php 
            }
            ?>
            </tbody>
        </table>

    </div>
</div>


</body>

<?php include 'footer.php' ?>