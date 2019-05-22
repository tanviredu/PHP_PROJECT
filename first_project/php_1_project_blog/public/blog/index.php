<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/php_1_project_blog/connection/connection.php";
   include_once($path);
?>

<?php require 'header.php' ?>
<!-- Main Content -->


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <a href="post.html"></a>
              
        <?php 
         $sql4 = "SELECT * FROM blog";
        $result4 = mysqli_query($conn, $sql4);


    if (mysqli_num_rows($result4) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result4)) {
              

        ?>
            <h2 class="post-title">
              <?php echo $row['title'] ?>
            </h2>
            <p class="post-subtitle">
             <?php echo $row['des'] ?>
            </p>
              
         
          <p class="post-meta">Posted by
            <a href="#"><?php echo $row['username'] ?></a>
            <?php echo $row['date'] ?></p>
        </div>
        <hr>
        
        
          <?php
    }
    }
        ?>

  <!-- Footer -->
<?php require 'footer.php' ?>





   