	<?php
        
       include 'classProject.php';
	   
		    $id = $_GET['id'];           
            $obj = new project();
            $obj->DeactivateUser($id);
			header("location:viewUser.php");
	   
      
    ?> 
		