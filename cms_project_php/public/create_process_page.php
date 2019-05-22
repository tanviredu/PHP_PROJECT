<?php require_once("../includes/db_connection.php") ?>
<?php require_once("../includes/function.php") ?>


<?php 
session_start();
	//first check is the submit button is pushed or not

	if (isset($_POST['submit'])) {
		//it will come from the form as a post request
		$page_name = $_POST['page_name'];
		$sub_id = $_SESSION['sub_id'];
		$position = (int) $_POST['page_position'];
		$visible  = (int) $_POST['page_visible'];
		$page_content  = $_POST['page_content'];


		//echo "$page_name" ." </br>";
		//echo "$sub_id" ." </br>";
		//echo "$position" ." </br>";
		//echo "$visible" ." </br>";
		//echo "$page_content" ." </br>";

		/* we have to add more validation 
		like the username password validation 
		it will be added later 
		*/


		/**************** valodating length of the subject ************************/
		//$res = subject_length_validate($page_name);
		//	if ($res == 0){
		//		$_SESSION['confirm'] = "title length should be between 3 to 15";
		//		redirect_to("tables.php");
		//	} 





		//before sending anything to mysql especially if iit is a string
		//then we need to go through a function called
		//mysql_real_escape_string() kind a big name to remember 
		//so we simplify it in function.php
		//now perform database query
		//$menu_name = mysql_prep($menu_name);
		//echo $menu_name;
		//echo $position;
		//echo $visible;
		$insert_create_page_query = "INSERT INTO `pages` (`id`, `subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (NULL, '{$sub_id}', '{$page_name}', {$position}, {$visible}, '{$page_content}');";

		$create_insert_result = mysqli_query($connection,$insert_create_page_query);

		if ($create_insert_result) {
			$_SESSION['confirm'] = "Suscessfully added";
			redirect_to('tables.php');

		}
		else{
			$_SESSION['confirm'] = "Sorry not added due to problem";
			redirect_to('new_subject.php');
		}




	}

	else{
		//if somebody try to insert by the get request we will redirect to 
		// create subject
		redirect_to('new_subject.php');
	}

?>





























  <?php 

  if (isset($connection)){
  mysqli_close($connection);
}
  ?>





INSERT INTO `pages` (`id`, `subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (NULL, '{$sub_id}', '{$page_name}', {$position}, {$visible}, '{$page_content}'); 

