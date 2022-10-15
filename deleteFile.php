	<?php
        
       include 'classProject.php';
	   
		    $id = $_GET['id'];  
		             
            $obj = new project();
            $path=$obj->getPath($id);
            
            //echo $path;
            //
            $result=$obj->DeleteAnnouncements($id);
            unlink($path);
			header("location:announcements.php");
	   
      
    ?> 
		