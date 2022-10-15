	<?php
        
       include 'classProject.php';
	   
		    $id = $_GET['id'];           
            $obj = new project();
            $obj->ActivateUser($id);
			header("location:viewUser.php");
	   
      
    ?> 
		