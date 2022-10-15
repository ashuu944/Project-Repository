<?php
		include 'classProject.php';
	if (isset($_POST['update']))
	{ 
	 $id = $_POST['statusID'];
	 $statusName = $_POST['statusName'];
	 
	 $obj = new project();
     
	 $obj->updateRole($id,$statusName);
	 
	header("location:viewStatus.php");
	}
?>