<?php

        
       include 'classProject.php';
       $obj = new project();
	   
        if (isset($_POST['update'])) {
            $userID = $_POST['userID'];
			
			$curP = $_POST['oldP'];
			$oldP=md5($_POST['oldPassword']);
			$password = md5($_POST['newPassword']);
			
			if($curP==$oldP)
			{
			
            
            
            $result=$obj->changePassword($userID,$password);
            if($result)
			{
				echo "<script type='text/javascript'>alert('Your password has been successfully changed!);
				  document.location='myProfile.php'</script>";
			}else{
				echo "<script type='text/javascript'>alert('The operation fail!);
				  document.location='myProfile.php'</script>";
			}

						
			
			}
			else{
				echo "<script type='text/javascript'>alert('Sorry!! The current password you entered is invalid!');
				  document.location='myProfile.php'</script>";
			}
        }

        if (isset($_POST['updateSupervisor'])) {
            $userID = $_POST['userID'];
			
			$curP = $_POST['oldP'];
			$oldP=md5($_POST['oldPassword']);
			$password = md5($_POST['newPassword']);
			
			if($curP==$oldP)
			{
			
            
            
            $result=$obj->changePassword($userID,$password);
            if($result)
			{
				/*echo "<script type='text/javascript'>alert('Your password has been successfully changed!);
				  document.location='profileS.php'</script>";*/
				  header("Location:profileS.php");
			}else{
				echo "<script type='text/javascript'>alert('The operation fail!);
				  document.location='profileS.php'</script>";
			}

						
			
			}
			else{
				echo "<script type='text/javascript'>alert('Sorry!! The current password you entered is invalid!');
				  document.location='profileS.php'</script>";
			}
        }




        ?>