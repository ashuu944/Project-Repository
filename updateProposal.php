<?php
session_start();
       include 'classProject.php';
	   
        if (isset($_POST['update'])) {
        	$projectID=$_POST['projectID'];
            $title = $_POST['title'];
			$problem = $_POST['problem'];
			$currentS = $_POST['current'];
			$proposedS = $_POST['solution'];
			$mainO = $_POST['main'];
			$antF = $_POST['ant'];
			$hardR = $_POST['hard'];
			$SoftR = $_POST['soft'];
			$tecID = $_POST['techID'];
			$year = $_POST['year'];
			
			
            
            $obj = new project();
           $result = $obj->updateProject($projectID,$title,$problem,$currentS,$proposedS,$mainO,$antF,$hardR,$SoftR,$year,$tecID);
			
			
			 if($results)
				echo "<script type='text/javascript'>alert('The project proposal has been updated successfully ')";
					
        }
			header("location:myProject.php");

        
        ?>