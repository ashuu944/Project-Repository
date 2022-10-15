<?php
        
       include 'classProject.php';
       $obj = new project();
	   
        if (isset($_POST['update'])) {
            $sprID = $_POST['sprID'];
			$fname = $_POST['fName'];
			$mname = $_POST['mName'];
			$lname = $_POST['lName'];
			$gender = $_POST['gender'];
			$telNo = $_POST['telNo'];
			$email = $_POST['email'];
			         
            
            $result=$obj->updateSupervisor($fname,$mname,$lname,$gender,$email,$telNo,$sprID);
			if($result){
				echo "<script type='text/javascript'>alert('You have successfully update your account information');
				  document.location='profileS.php'</script>";

				
		
				
			}else
			{
				echo "<script type='text/javascript'>alert('Sorry your request fail to update!');
			  document.location='profileS.php'</script>";
 				
				
 				
			}
			
}
			
        
        ?>