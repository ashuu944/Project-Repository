<?php
session_start();
       include 'classProject.php';
	   
        if (isset($_POST['register'])) {
            $title = $_POST['title'];
			$problem = $_POST['problem'];
			$currentS = $_POST['current'];
			$proposedS = $_POST['solution'];
			$mainO = $_POST['main'];
			$antF = $_POST['ant'];
			$hardR = $_POST['hard'];
			$SoftR = $_POST['soft'];
			$stdID = $_POST['stdID'];
			$tecID = $_POST['techID'];
			$year = $_POST['year'];
			
			
            
            $obj = new project();
           $result = $obj->registerProject($title,$problem,$currentS,$proposedS,$mainO,$antF,$hardR,$SoftR,$year,$tecID);
			
			if($result){
			$projectID=$result;
			$results=$obj->addStudentProject($stdID,$projectID);
			 //echo $stdID;
			 if($results)
				echo "<script type='text/javascript'>alert('The project proposal has been sent successfully ')";
					
        }
			header("location:myProject.php");
        }

         if (isset($_POST['customize'])) {
         	$prevID=$_POST['prevID'];
            $title = $_POST['title'];
			$problem = $_POST['problem'];
			$currentS = $_POST['current'];
			$proposedS = $_POST['solution'];
			$mainO = $_POST['main'];
			$antF = $_POST['ant'];
			$hardR = $_POST['hard'];
			$SoftR = $_POST['soft'];
			$stdID = $_POST['stdID'];
			$tecID = $_POST['techID'];
			$year = $_POST['year'];
			
			
            
            $obj = new project();
           $result = $obj->registerProject($title,$problem,$currentS,$proposedS,$mainO,$antF,$hardR,$SoftR,$year,$tecID);
			
			if($result){
			$projectID=$result;
			$results=$obj->addStudentProject($stdID,$projectID);

			//upload document of Limitatin and solution
			$path = 'RelatedProject/';

			$file=$_FILES["projLim_path"];
			$errors=array();
            $obj->file_uploaded($file,$path);
            if(!empty($errors)){
                foreach($errors as $key => $error){echo $error;}
            } else{
                $limPath=$path.$file["name"];
                
                $result=$obj->addRelatedProject($prevID,$projectID,$limPath);
                move_uploaded_file($file['tmp_name'], $limPath);
                
            }

            header("location:myProject.php");
			 
					
        } else
        		header("location:proposalCustomize.php");
			
        }

        
        ?>