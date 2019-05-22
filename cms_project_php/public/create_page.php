<?php require_once("../includes/db_connection.php") ?>
<?php require_once("../includes/function.php") ?>






<!DOCTYPE html>
<html lang="en">

            <?php 

            session_start();
            //now fetch data from the query sting using $_GET superglobal variable
            //because data from the query stign is fetched from the $_GET variable
            //remember user click only one link at a time so we can get the
            //subject id or the page id not both so if one is fetched other have to 
            //assign null
            if (isset($_GET["subject"])) {
                //header("location:tables.php");
                $pid = $_GET['subject'];
                //$result = find_all_pages($sid);
                //$_SESSION['pid']= $selected_sub_id; 
                $_SESSION['sub_id'] = $pid;
               


            }
        
                 
            else{
                //if none of this happen like when we refresh the page
                //both are null
                echo "problem";
                //$selected_page_id = null;


            }

            


            ?>



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
     // while ( $subject = mysqli_fetch_assoc($result)) {
        
    ?>
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <b><font color="white"></br>&nbsp;&nbsp;&nbsp;&nbsp;CREATE NEW PAGE</b></font>
          <a class="nav-link" href="manage_content.php">
          <span>Go Back</span>
          </a>
        </li>
         
        
       
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

       


<div class="main_starts">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="create_process_page.php" method="POST">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3> Create New Page</h3>
                                 
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="page_name" placeholder="Enter Page name ">
                                    </div>
                                </div>
                                <div class="form-group">
                                       <label for="sel1">Select Position:</label>
                                     <select name="page_position" class="form-control" id="sel1">


<!-- php goes here to find the last position of the post 
number of post +1-->                    <?php
                                        $subject_set = find_all_pages($pid);
                        //to find the number of subjects we have to
                        //find how many rows are in the subject set
                        //the function is mysqli_num_rows()
                        // the reason for using $subject_count+1 in the for loop is
                        // give the additionaln option for ading subjects 
                                      $subject_count = mysqli_num_rows($subject_set);
                            for ($count=1; $count<=$subject_count+1 ; $count++) { 
                              echo "<option value='{$count}'>{$count}</option>";
                            }
                                          ?>         
                                                </select>
                                              </div> 

                                <div class="form-group">
                                   <label >Visible:</label>
                                   <div class="checkbox">
                                      <label><input type="checkbox" name="page_visible" value="0">No</label>
                                    </div>
                                    <div class="checkbox">
                                      <label><input type="checkbox" name="page_visible" value="1">Yes</label>
                                    </div>
                                </div>

                                 <div class="form-group">
                                  <label for="comment">Add Content:</label>
                                    <textarea class="form-control" name="page_content" rows="5" id="comment"></textarea>
                                        </div> 

                                <div class="text-center">
                                    <input type="submit" value="submit" name="submit" class="btn btn-success">
                                    <a href="manage_content.php"></a><button   class="btn btn-danger" >cancel</button></div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
  </div>
</div>






</div>

          
         

         
        
        
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright Tanvir Rahman</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="javaScript/jquery/jquery.min.js"></script>
    <script src="javaScript/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>

