<?php
        
       include 'classProject.php';
       $obj = new project();
	   
        if (isset($_POST['update'])) {
            $stdID = $_POST['stdID'];
			$fname = $_POST['fName'];
			$mname = $_POST['mName'];
			$lname = $_POST['lName'];
			$gender = $_POST['gender'];
			$prgID = $_POST['prgID'];
			$telNo = $_POST['telNo'];
			$email = $_POST['email'];
			         
            
            $result=$obj->updateStudent($fname,$mname,$lname,$gender,$email,$telNo,$prgID,$stdID);
			if($result){
				echo "<script type='text/javascript'>alert('You have successfully update your account');
				  document.location='myProfile.php'</script>";

				
		
				
			}else
			{
				echo "<script type='text/javascript'>alert('Sorry your request fail to update!');
			  document.location='myProfile.php'</script>";
 				
				
 				
			}
			
}
			
        
        ?>