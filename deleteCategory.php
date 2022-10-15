	<?php
        
       include 'classProject.php';
                  
    	$obj = new project();
	   
		$id = $_GET['id'];           
        $obj->deleteCategory($id);
		header("location:viewCategory.php");
	   
      
    ?> 
		