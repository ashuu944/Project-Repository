<?php
session_start();
       include 'classProject.php';
	   
        if (isset($_POST['update'])) {
        	$projectID=$_POST['projectID'];
            $future= $_POST['future'];
            $abstract= $_POST['abstract'];
            
			
			
			
            
            $obj = new project();
           $result = $obj->completeProject($projectID,$future,$abstract);
			
			 
        }
			header("location:myProject.php");

        
        ?>