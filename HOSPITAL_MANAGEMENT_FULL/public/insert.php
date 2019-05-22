    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/HOSPITAL_MANAGEMENT_FULL/config.php";

   include_once($path);
?>


<?php 

$patient_id = $_POST['patient_id'];
$patient_name = $_POST['patient_name'];
$doctor_name = $_POST['doctor_name'];
$mobile = $_POST['mobile'];
$time = $_POST['time'];
// this is how to covert time to mysql

$unix_time = strtotime($time);
$time= date("Y-m-d H:i:s",$unix_time);



insert_data($patient_id,$patient_name,$doctor_name,$mobile,$time);

?>