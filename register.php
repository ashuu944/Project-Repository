<?php
        
       include 'classProject.php';
       $obj = new project();
	   
        if (isset($_POST['register'])) {
            $userID = $_POST['userID'];
            $stdID = $_POST['stdID'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			$gender = $_POST['gender'];
			$prgID = $_POST['prgID'];
			$telNo = $_POST['telNo'];
			$email = $_POST['email'];
			$curP = $_POST['oldP'];
			$oldP=md5($_POST['oldPassword']);
			$password = md5($_POST['newPassword']);
			
			if($curP==$oldP)
			{
            $result=$obj->updateStudent($fname,$mname,$lname,$gender,$email,$telNo,$prgID,$stdID);
			if($result){
				$change=$obj->changePassword($userID,$password);
			   if($change){
				echo "<script type='text/javascript'>alert('You have successfully complete your registration!!');
				  document.location='logout.php'</script>";
				}

			}
			}			
			else{
			
            
				echo "<script type='text/javascript'>alert('Sorry!! The current password you entered is not correct!');
				  document.location='welcome.php'</script>";
			}
        }
        ?>