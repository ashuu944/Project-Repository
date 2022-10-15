<?php
		include 'classUser.php';
	if (isset($_POST['update']))
	{ 
	 $id = $_POST['userID'];
	 $statusID = $_POST['statusID'];
	 $status = $_POST['status'];
	 
	 $obj = new User();
     
	 $obj->updateUserAccount($id,$statusID,$status);
	 
	header("location:viewUser.php");
	}
?>