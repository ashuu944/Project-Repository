<?php
        
       include 'classProject.php';
        if (isset($_POST['register'])) {
            $projectID = $_POST['projectID'];
            $cName = $_POST['commentName'];
            $cDes = $_POST['commentDes'];
            
            $obj = new project();           
            $obj->addComment($projectID,$cName,$cDes);
			header("location:viewTitle.php");
        }

        elseif(isset($_POST['add']))
        {
           $projectID = $_POST['projectID'];
            $cName = $_POST['commentName'];
            $cDes = $_POST['commentDes'];
            
            $obj = new project();           
            $obj->addComment($projectID,$cName,$cDes);
            header("location:projectDetails.php?id=$projectID");
        } 
        else echo "no comment sent";
        ?>