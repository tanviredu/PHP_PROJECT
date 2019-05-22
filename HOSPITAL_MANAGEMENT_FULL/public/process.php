<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/HOSPITAL_MANAGEMENT_FULL/config.php";

   include_once($path);

    session_start();
 

    $data = $_GET['patient_id'];
    if($data){
        
        $query4 ="DELETE FROM patient WHERE patient_id='$data';";
        $res=make_query($query4);
        if($res){
         redirect('docprofile.php');
        }
        
    }

?>