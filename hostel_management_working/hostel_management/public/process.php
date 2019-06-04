<?php 
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/hostel_management/config/config.php";
     // it will call function too
      include_once($path);
      session_start();
 

    $data = $_GET['room'];
    if($data){
        
        $query4 ="DELETE FROM member WHERE room='$data';";
        $res=make_query($query4);
        if($res){
         redirect('delete_member.php');
        }
        
    }

?>