<?php
		include 'classProject.php';
	if (isset($_POST['update']))
	{ 
	 $id = $_POST['prgID'];
	 $pCode = $_POST['prgCode'];
	 $prgName = $_POST['prgName'];
	 
	 $obj = new project();
     
	 $obj->updateProgramme($id,$pCode,$prgName);
	 
	header("location:viewProgramme.php");
	}
?>