<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>




<!-- -it is a prcess file for deleting pages-->
            <?php 

            session_start();
            //now fetch data from the query sting using $_GET superglobal variable
            //because data from the query stign is fetched from the $_GET variable
            //remember user click only one link at a time so we can get the
            //subject id or the page id not both so if one is fetched other have to 
            //assign null
            if (isset($_GET["page"])) {
                //header("location:tables.php");
                $pid = $_GET['page'];
                //$_SESSION['pid']= $selected_sub_id; 
                //$selected_page_id = null;
                // we dont need 
                //header("Location:tables.php");
                //echo $pid;


                // we get the pid now lets delete it by creating sql query
                $dlpagequery = "DELETE FROM `pages` WHERE `pages`.`id` = {$pid}";
                //echo $dlpagequery;

                $delete_result = mysqli_query($connection, $dlpagequery);
                confirm_query($delete_result);
               redirect_to('manage_content.php');



            }
            elseif (isset($_GET['subject'])) {
                //header("location:tables.php");
                $sid = $_GET['subject'];
                //$_SESSION['pid']= $selected_sub_id; 
                //$selected_page_id = null;
                // we dont need 
                //header("Location:tables.php");
                //echo $pid;
                echo $sid;


                /***********************************************************

                //if you delete the subjects the pages will also delete so there are two 
                // sql query


************************************/

                // we get the pid now lets delete it by creating sql query
                $dlsubquery = "DELETE FROM `subjects` WHERE `subjects`.`id` = {$sid}";
                $dlpage_subquery = "DELETE FROM `pages` WHERE `pages`.`subject_id` = {$sid}";
                //echo $dlsubquery;

                $delete_result_sub = mysqli_query($connection, $dlsubquery);
                $delete_result_sub_page = mysqli_query($connection, $dlpage_subquery);

                confirm_query($delete_result_sub);
                confirm_query($delete_result_sub_page);

                redirect_to('manage_content.php');           


            }
            else{
                //if none of this happen like when we refresh the page
                //both are null
                echo "problem";
                //$selected_page_id = null;


            }

            


            ?>

            


