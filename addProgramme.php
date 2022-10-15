	<?php
        
       include 'classProject.php';
	   
		    if (isset($_POST['register'])) {
            $pc = $_POST['pCode'];
			$pn = $_POST['progName'];
            
            $obj = new project();
            $obj->addProg($pc,$pn);
			header("location:viewProgramme.php");
			
        }
	   
      
        ?> 