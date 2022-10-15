	<?php
        
       include 'classProject.php';
	   
		    $id = $_GET['id'];           
            $obj = new project();
            $obj->deleteRole($id);
			header("location:viewStatus.php");
	   
      
    ?> 
		