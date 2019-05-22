<!-- Main Content -->

<?php require'php_1_project_blog/connection/connection.php' ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.html">
              
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
            <h3 class="post-subtitle">
             <?php echo $row['des'] ?>
            </h3>
              
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php echo $row['username'] ?></a>
            <?php echo $row['date'] ?></p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 18, 2019</p>
        </div>
        <hr>
        
          <?php
    }
    }
        ?>

  <!-- Footer -->