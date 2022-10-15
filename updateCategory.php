<?php
		include 'classProject.php';
	if (isset($_POST['update']))
	{ 
	 $id = $_POST['techID'];
	 $techName = $_POST['techName'];
	 
	 $obj = new project();
     
	 $obj->updateCategory($id,$techName);
	 
	header("location:viewCategory.php");
	}
?>