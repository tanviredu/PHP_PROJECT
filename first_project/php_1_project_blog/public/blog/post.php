<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/php_1_project_blog/connection/connection.php";
   include_once($path);
?>

<?php require 'header.php' ?>



            

<form action="postprocess.php" method='POST'>
  <center>
    <div class="col" style="width:900px">
        <h3 class="post-title">
              Enter title
            </h3>
      <input type="text" class="form-control" name='title' placeholder="Title">
  
        <h3 class="post-title">
              Enter Post
            </h3>
        
        <textarea rows="20" cols="100" class="form-control" name="post" ></textarea>
</div>
      </br >
    <input type="submit" class="btn btn-danger" value="submitpost" name="submitpost">
  </form>
</center>



<?php require 'footer.php' ?>