	<?php
        
       include 'classProject.php';
            $obj = new project();
	   
		    if (isset($_POST['register'])) {
            $u = $_POST['username'];
			$pass = md5($_POST['password']);
			$role = $_POST['statusID'];
			$fname = $_POST['fName'];
			$mname = $_POST['mName'];
			$lname = $_POST['lName'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];

            $result=$obj->addUser($u,$pass,$role);
            $roleName=$obj->getRoleName($role);
            //echo $roleName;

            if($result){
			$userID=$result;
			//echo $userID;

            if(($roleName=='STUDENT') || ($roleName=='Student') || ($roleName=='STUDENT')){
            
            
            $results=$obj->registerStudent($fname,$mname,$lname,$u,$userID,$gender,$email);
            if($results)
            	echo "<script type='text/javascript'>alert('User has been created successfully!');
				  			document.location='viewUser.php'</script>";

             }else{
             	$resultss=$obj->registerSupervisor($fname,$mname,$lname,$userID,$gender,$email);
             	if($resultss)
             		echo "<script type='text/javascript'>alert('User has been created successfully!');
				  			document.location='viewSupervisor.php'</script>";
             }
			}
        }

			if(isset($_POST["upload"]))
			{
			$role=$obj->roleID();
			

			 $file = $_FILES["file"]["tmp_name"];
			 $file_open = fopen($file,"r");
					 while(($csv = fgetcsv($file_open, 2000, ",")) !== false)
					 {
					  $fname = $csv[0];
					  $mname = $csv[1];
					  $lname = $csv[2];
					  $regNo = $csv[3];
					  $email = $csv[4];
					  $pass=12345678;

					  $password=md5($pass);
					  //echo $password;
			  		  $result=$obj->addUser($regNo,$password,$role);

			  		
					$userID=$result;
					//echo $userID;
					$resultss=$obj->registerStudentbyFile($fname,$mname,$lname,$email,$regNo,$userID);
					if($resultss)
					{
						echo "<script type='text/javascript'>alert('Users has been created successfully!');
				  			document.location='viewUser.php'</script>";
					}else
							echo "<script type='text/javascript'>alert('Sorry!! the process fail');
				  					document.location='index.php'</script>";
			

            
            		}
			         
            }

	   //header("location:viewUser.php");
      
        ?> 