	<?php
        
       include 'classProject.php';
	   
		    $id = $_GET['id'];           
            $obj = new project();
            $obj->deleteProg($id);
			header("location:viewProgramme.php");
	   
      
    ?> 
		