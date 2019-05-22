<?php require_once("../includes/db_connection.php") ?>
<?php require_once("../includes/function.php") ?>



<?php 
 //we have to perform the subject crud and pages crud
// for subject crud we have to first show the subject by fetching the subject
//fetch the subject
//if the visible is 0 that means not visible and position shows its place
// they are in the subjects table

session_start();
$result = find_all_subjects();

?>









          <?php 
          //now fetch data from the query sting using $_GET superglobal variable
          //because data from the query stign is fetched from the $_GET variable
          //remember user click only one link at a time so we can get the
          //subject id or the page id not both so if one is fetched other have to 
          //assign null
          if (isset($_GET["subject"])) {
            //header("location:tables.php");
            $selected_sub_id = $_GET['subject'];
            $_SESSION['sub_id']= $selected_sub_id; 
            $selected_page_id = null;
            header("Location:tables_public.php");
          }
          elseif (isset($_GET['page'])) {
            $selected_sub_id = "null";
            $selected_page_id = $_GET['page'];
            $_SESSION['page_id']= $selected_page_id;

        header('Location:tables_public.php');
          }
          else{
            //if none of this happen like when we refresh the page
            //both are null
            $selected_sub_id = null;
            $selected_page_id = null;


          }

          


          ?>


































<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WIDGET CORP</title>

    <!-- Bootstrap core CSS-->
    <link href="stylesheets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="stylesheets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="stylesheets/css/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="stylesheets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">CMS PROJECT</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>




      <!-- searchbar wil be added later  --> 

      
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->




      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <?php 
      while ( $subject = mysqli_fetch_assoc($result)) {
        
    ?>
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?subject=<?php echo $subject['id']?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><?php echo $subject['menu_name']; ?></span>
          </a>

            <!--#######################

              this is the page listion-->

              <?php 
                $page_result = find_all_pages($subject['id']);

              ?>
              <ul>

                <?php  while ($page = mysqli_fetch_assoc($page_result)) {
                    
                ?> <a href="index.php?page=<?php echo $page['id']?>">
                <li><font color="white"> <?php echo $page['menu_name']; ?> </font></li>
              </a>
                <?php

              }?>


              </ul>

        


              <!-- to make the link we have to create the query string 
               //now we have to make the query string

               creating query strign is very very easy  
            -->
              







        <?php }?>

            <li class="nav-item active">
          <a class="nav-link" href="login.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Login</span>
          </a>



        <?php
        mysqli_free_result($result);
        ?>



      

</nav>









       
    
    <!-- #wrapper -->

  

    <!-- Bootstrap core JavaScript-->
   

  </body>

</html>
