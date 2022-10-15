<?php
		include 'classProject.php';
	if (isset($_POST['update']))
	{ 
	 $ID = $_POST['ID'];
	 $title = $_POST['title'];
	 $startDate = $_POST['startDate'];
	 $endDate = $_POST['endDate'];
	 
	 $obj = new project();
     
	 $obj->updateSetting($ID,$title,$startDate,$endDate);
	 
	header("location:projectSetting.php");
	}
?>