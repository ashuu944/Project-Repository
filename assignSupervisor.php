<?php
		include 'classProject.php';
	if (isset($_POST['submit']))
	{ 	
		$obj = new project();
		$number_project=$_POST['number_project'];
		for($x=1;$x<=$number_project;$x++)
		{
			$projectID = $_POST['projectID'.$x];
			$sprID = $_POST['sprID'.$x];
			if(!empty($sprID))
			{
				$obj->assignSupervisor($projectID,$sprID);
				//echo $projectID."<br>";
				//echo $sprID;
			}
		}
		header("location:projectSupervisor.php");
	}
?>