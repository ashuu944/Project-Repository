	<?php
        
       include 'classProject.php';
	   
		    $id = $_GET['id'];  
		             
            $obj = new project();
            $path=$obj->getDeliverablePath($id);
            echo $id;
            echo $path;
            
            $result=$obj->deleteDeliverable($id);
            unlink($path);
			header("location:myProject.php");
	   
      
    ?> 
		