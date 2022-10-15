<?php

require_once 'dbConnect.php';

class project {	

    function object() {
        $obj = new database();
        $db = $obj->connect();
        return $db;
    }
	
	
    //category methods

    function addTech($techName) {
		$this->object()->query("insert into category (techName)"
                    . "values ('{$techName}')");      
	}
	
	
	function viewCategory() {
        $resultss = $this->object()->query("SELECT * FROM category order by techName asc");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }
	
	//Method to delete category
    function deleteCategory($id) {
		$this->object()->query("delete from category where techID='{$id}'");   
					
		}
        		
	
	function updateCategory($id,$techName) {
				
		$this->object()->query("UPDATE category SET techName='$techName' where techID='{$id}'");
        
        		
					
		}

	//Methods of Programme

	//Method to add new programme 
    function addProg($prgCode,$prgName) {
		$this->object()->query("insert into programme (prgCode,prgName)"
                    . "values ('{$prgCode}','{$prgName}')");   
					
		}
		
	//Method to view programmes 
		
	function viewProgramme() {
		 $resultss = $this->object()->query("SELECT * FROM programme order by prgName asc");
		 $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
		
    }
		
		
	//Method to delete programmes
    function deleteProg($id) {
		$this->object()->query("delete from programme where prgID='{$id}'");   
					
		}
		
	function updateProgramme($id,$prgCode,$prgName) {
				
		$this->object()->query("UPDATE programme SET prgCode='$prgCode',prgName='$prgName' where prgID='{$id}'");
        
        		
					
		}

	//Methods of Role
		function addRole($statusName) {
		$this->object()->query("insert into role (statusName)"
                    . "values ('{$statusName}')");      
		}

	function roleID(){
		$resultss = $this->object()->query("SELECT statusID from role where statusName='Student' || statusName='student' || statusName='STUDENT'");
		$role=$resultss->fetch_array();
		$roleID=$role['statusID'];
		return $roleID;

	}

	function getRoleName($role){
		$resultss = $this->object()->query("SELECT statusName from role where statusID='$role'");
		$role=$resultss->fetch_array();
		$rolName=$role['statusName'];
		return $rolName;

	}

	function getPath($id){
		$resultss = $this->object()->query("SELECT announcements.path from announcements where ID='$id'");
		$s=$resultss->fetch_array();
		$path=$s['path'];
		return $path;

	}

	function getDeliverablePath($id){
		$resultss = $this->object()->query("SELECT project_delivarable.path from project_delivarable where delID='$id'");
		$s=$resultss->fetch_array();
		$path=$s['path'];
		return $path;

	}

	function deleteDeliverable($id){
		$resultss = $this->object()->query("Delete from project_delivarable where delID='$id'");

	}

	function DeleteAnnouncements($id){
		$resultss = $this->object()->query("Delete from announcements where ID='$id'");
		

	}
		
	 function viewRole() {
		$resultss = $this->object()->query("SELECT * FROM role order by statusName asc");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}
	
	//Method to delete role
    function deleteRole($id) {
		$this->object()->query("delete from role where statusID='{$id}'");   
					
		}
    
	function updateRole($id,$statusName) {
				
		$this->object()->query("UPDATE role SET statusName='$statusName' where statusID='{$id}'");
        
        		
					
		}
	function updateSetting($id,$title,$startDate,$endDate) {
				
		$this->object()->query("UPDATE setting SET title='$title',startDate='$startDate',endDate='$endDate' where ID='$id'");
        
        		
					
		}
        
	//Methods of User

	function addUser($username, $password, $role) {
		
		$results = $this->object()->query("SELECT UserName,password,statusID FROM user WHERE UserName='$username'");
        if ($results->num_rows) {
            echo "<script type='text/javascript'>alert('Sorry! the username already exist!');
				  document.location='createUser.php'</script>";
        }
		else{
		$status='Active';
		$con=$this->object();
		$result=$con->query("insert into user (userName, password, statusID,status,f_login)"
                    . "values ('$username','$password','$role','$status','0')")or die(mysqli_error()); 

		return $con->insert_id;     
		}
	}
    function login($username, $password) {
		
		$result = $this->object()->query("SELECT * FROM user WHERE userName='{$username}' AND password='{$password}'");

        if ($result->num_rows) {

            $a = $result->fetch_assoc();
            $id = $a['userID'];
			$username = $a['userName'];
			$status=$a['status'];
			$pass=$a['password'];
			$f_login=$a['f_login'];
			
            $query = $this->object()->query("SELECT statusName FROM role,user WHERE role.statusID=user.statusID AND "
                    . "user.userID='$id'");
            $E = $query->fetch_assoc();
            $role = $E['statusName'];
             if((($status=='Active')||($status=='active') || ($status=='ACTIVE') )&& ($f_login==0))
			 { 
				$_SESSION['id'] = $id;
				$_SESSION['role'] = $role;
				$_SESSION['pass'] = $pass;
				header("location:welcome.php"); 
			 }
		 
            //..............................
			elseif((($status=='Active')||($status=='active') || ($status=='ACTIVE') )&& ($f_login > 0))
			{
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
				if(($role=="Student") || ($role=="STUDENT") || ($role=="student")){
                header("location:profile.php");
				}
				else {
					header("location:home.php");
				}
					
			}
                
            else {
            
				  echo "<script type='text/javascript'>alert('Sorry!! Your account has been deactivated!');
				  document.location='index.php'</script>";
			  
        }
			
			
        } 
		else {
            
				  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
				  document.location='index.php'</script>";
			  
        }
		
        
    }

    function viewUser() {
		$resultss = $this->object()->query("SELECT userID,UserName,user.statusID,statusName,status FROM role,user WHERE role.statusID=user.statusID order by userName asc");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

    function DeactivateUser($id) {
		$this->object()->query("UPDATE user SET status='Inactive' where userID='{$id}'");   
					
		}
	function ActivateUser($id) {
		$this->object()->query("UPDATE user SET status='Active' where userID='{$id}'");   
					
		}
	
	function updateUserAccount($id,$statusID,$status) {
				
		$this->object()->query("UPDATE user SET statusID='$statusID',status='$status' where userID='{$id}'");
        
        		
					
		}
	function changePassword($id,$password) {
				
		$result=$this->object()->query("UPDATE user SET password='$password',f_login='1' where userID='{$id}'");
        if($result)
        	return true;
        		
					
		}

	function updateStudent($fname,$mname,$lname,$gender,$email,$telNo,$prgID,$stdID) {
				
		$this->object()->query("UPDATE student SET fName='$fname',mName='$mname',lName='$lname',gender='$gender',email='$email',telNo='$telNo',prgID='$prgID' where stdID='$stdID'") or die(mysqli_error());
        
        	return true;	
					
		}

	// Methods of Student

	function registerStudentbyFile($fname,$mname,$lname,$email,$regNo,$userID) {
		$con=$this->object();
		$result=$con->query("insert into student (fName,mName,lName,regNo,email,userID)"
                    . "values ('$fname','$mname','$lname','$regNo','$email','$userID')")or die(mysqli_error($con));
			
		if($result)
		  return true;	
		 		
		} 

		function registerStudent($fname,$mname,$lname,$u,$userID,$gender,$email){
			$result=$this->object()->query("insert into student (fName,mName,lName,regNo,email,gender,userID)"
                    . "values ('$fname','$mname','$lname','$u','$email','$gender','$userID')")or die(mysqli_error());
           if($result)
           	return true;
		}

		function registerSupervisor($fname,$mname,$lname,$userID,$gender,$email){
			$result=$this->object()->query("insert into supervisor (fName,mName,lName,email,gender,userID)"
                    . "values ('$fname','$mname','$lname','$email','$gender','$userID')")or die(mysqli_error());
           if($result){
			$results=$this->object()->query("UPDATE user SET f_login='1' where userID='{$userID}'");
			if($results) {
				return true;
			}
			}
		}
	
	function viewSetting() {
		$resultss = $this->object()->query("SELECT * FROM setting order by startDate asc");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}
    

    function viewStudent() {
		$resultss = $this->object()->query("SELECT * FROM student,programme WHERE student.prgID=programme.prgID ORDER BY fName ASC");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	function viewStudentWithNoproject($stdID) {
	$resultss = $this->object()->query("SELECT * FROM student_project WHERE student_project.stdID='$stdID'");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}
	
	function profile($userID) {

        $resultss = $this->object()->query("SELECT * FROM student,user,programme WHERE student.userID='{$userID}' AND student.prgID=programme.prgID AND student.userID=user.userID");

        
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
    }

    function profileFirst($userID) {

        $resultss = $this->object()->query("SELECT * FROM student,user WHERE student.userID='{$userID}' AND student.userID=user.userID");

        
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
    }

    function updateSupervisor($fname,$mname,$lname,$gender,$email,$telNo,$sprID) {
				
		$this->object()->query("UPDATE supervisor SET fName='$fname',mName='$mname',lName='$lname',gender='$gender',email='$email',telNo='$telNo' where sprID='$sprID'") or die(mysqli_error());
        
        	return true;	
					
		}

    function profileSupervisor($userID) {

        $resultss = $this->object()->query("SELECT * FROM supervisor,user WHERE supervisor.userID='$userID' AND supervisor.userID=user.userID");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	function assignSupervisor($projectID,$sprID) {
				
		$this->object()->query("UPDATE student_project SET sprID='$sprID' where projectID='$projectID'");
        
        		
					
		}

		function changePix($path,$stdID) {
				
		$this->object()->query("UPDATE student SET profilePic='$path' where stdID='$stdID'");
        
 
        }
					


		function changePix2($path,$sprID) {
				
		$this->object()->query("UPDATE supervisor SET profilePic='$path' where sprID='$sprID'");
        
        		
					
		}


	function mySupervisor($stdID) {

        $resultss = $this->object()->query("SELECT supervisor.sprID,supervisor.fName,supervisor.mName,supervisor.lName,supervisor.gender,supervisor.email,supervisor.telNo,supervisor.profilePic FROM supervisor,student,student_project WHERE student.stdID='$stdID' AND supervisor.sprID=student_project.sprID AND student.stdID=student_project.stdID group by supervisor.sprID") or die (mysqli_error());

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

    //Methods of Supervisor

    function registerSupervisor1($fname,$mname,$lname,$gender,$email,$telNo,$userID,$username,$password) {
		
		$result=$this->object()->query("insert into supervisor (fName,mName,lName,gender,email,telNo,userID)"
                    . "values ('$fname','$mname','$lname','$gender','$email','$telNo','$userID')")or die(mysqli_error());
        
         if($result){
			$this->object()->query("UPDATE user SET userName='$username',password='$password', f_login='1' where userID='{$userID}'"); 
			
		 }		
		} 
		
	
	
    

    function viewSupervisor() {
		$resultss = $this->object()->query("SELECT * FROM supervisor ORDER BY fName ASC");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	function SupervisorProject($projectID) {
		$resultss = $this->object()->query("SELECT fName,mName,lName,supervisor.sprID FROM supervisor,student_project,project where student_project.sprID=supervisor.sprID AND student_project.projectID='$projectID' AND project.projectID=student_project.projectID GROUP by student_project.projectID");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	/*function superProject($superVisorID) {
		$resultss = $this->object()->query("SELECT sprID FROM student_project where ");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}*/



	// Methods of Project
	
	function addComment($projectID,$cName,$cDes) {
		$result=$this->object()->query("insert into comments (name,commentDescp,projectID)"
                    . "values ('$cName','$cDes','$projectID')")or die(mysqli_error($this->object()));
		if($result)
			$this->object()->query("UPDATE project SET comment_flag='1' where projectID='{$projectID}'"); 



		}

     function viewProposal($projectID) {
		$resultss = $this->object()->query("SELECT p.projectID, title,problem_statement,current_situation,proposed_solution,main_objectives,anticipated_artifact,hardware_requirement,software_requirements,year,techName,future,abstract,name,commentDescp FROM project p,student_project sp,category c,comments co where p.projectID=$projectID AND co.projectID=p.projectID AND sp.projectID='$projectID' AND c.techID=p.techID group by projectID");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	function viewFuture($projectID) {
		$resultss = $this->object()->query("SELECT projectID, title,abstract,future FROM project WHERE projectID='$projectID'");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	function viewProposal2($projectID) {
		$resultss = $this->object()->query("SELECT p.projectID, title,problem_statement,current_situation,proposed_solution,main_objectives,anticipated_artifact,hardware_requirement,software_requirements,year,techName FROM project p,category c where p.projectID=$projectID AND c.techID=p.techID group by projectID");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}



	function viewStudentProposal($projectID) {
		$resultss = $this->object()->query("SELECT student.stdID,fName,mName,lName,prgName,prgCode,gender,regNo,telNo,email,student_project.id FROM student,student_project,programme where student_project.projectID='$projectID' AND student.stdID=student_project.stdID AND student.prgID=programme.prgID ORDER BY fName ASC");
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	//Proposal methods

	function viewProjectTitle() {
        $resultss = $this->object()->query("SELECT projectID,title,year FROM project,category WHERE comment_flag=0 AND project.techID=category.techID   ORDER BY title ASC");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function viewProjectOftheYear2() {
    	$resultss = $this->object()->query("SELECT projectID,title,techName FROM project,category WHERE project.techID=category.techID ORDER BY title ASC");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function viewProjectOftheYear() {
    	$year=date('Y');
        $resultss = $this->object()->query("SELECT projectID,title,year,techName FROM project,category WHERE project.techID=category.techID AND year='$year'  ORDER BY title ASC");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function addRelatedProject($prevID,$newID,$limPath) {
    	$con=$this->object();
		$result=$con->query("insert into related_project (projLim_path,prevProjID,newProjID)"
                    . "values ('$limPath','$prevID','$newID')") or die(mysqli_error($con));
                    return true;     
		}

	function customizedProject(){
	 $resultss = $this->object()->query("SELECT * FROM related_project");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;

}
    function myGroups($sprID) {
    	$year=date('Y');
        $resultss = $this->object()->query("SELECT project.projectID,title,year FROM project,student_project,supervisor WHERE supervisor.sprID='$sprID' AND student_project.sprID=supervisor.sprID AND project.projectID=student_project.projectID GROUP BY project.projectID ORDER BY year Desc");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function viewProject() {
    	
        $resultss = $this->object()->query("SELECT projectID,title,year FROM project WHERE future Is NOT null ORDER BY year Desc");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function developedProject() {
    	$year=date("Y");
        $resultss = $this->object()->query("SELECT projectID,title,year FROM project WHERE year < '$year' and future Is NOT null order BY year Desc");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function recentlyProject() {
    	$year=date("Y")-1;
        $resultss = $this->object()->query("SELECT projectID,title,techName FROM project,category WHERE year='$year' AND project.techID=category.techID and future Is NOT null order BY title ASC");
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function myProject($stdID) {
        $resultss = $this->object()->query("SELECT * FROM project,student,student_project,category,comments where student.stdID=$stdID AND student_project.stdID=$stdID AND project.techID=category.techID  AND project.projectID=student_project.projectID AND project.projectID=comments.projectID") or die(mysqli_error());
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function myProject2($stdID) {
        $resultss = $this->object()->query("SELECT * FROM project,category,student_project where student.stdID=$stdID AND  project.techID=category.techID AND student.stdID=student_project.stdID AND project.projectID=student_project.projectID") or die(mysqli_error());
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function myDeliverable($projectID) {
        $resultss = $this->object()->query("SELECT * FROM project,project_delivarable where project.projectID='$projectID' AND project.projectID=project_delivarable.projectID") or die(mysqli_error());
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function projectComments($projectID) {
        $resultss = $this->object()->query("SELECT project.projectID,comments.name,commentDescp FROM project,comments where project.projectID='$projectID' AND project.projectID=comments.projectID") or die(mysqli_error());
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }

    function studentProject($projectID,$studentID) {
        $resultss = $this->object()->query("SELECT student_project.id FROM project,student, student_project where project.projectID='$projectID' AND student.stdID='$studentID' AND student.stdID=student_project.stdID AND project.projectID=student_project.projectID") or die(mysqli_error());
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }



    function myTitle($stdID) {
        $resultss = $this->object()->query("SELECT project.projectID,title FROM project,student,student_project where student.stdID=$stdID AND student_project.stdID=$stdID And project.projectID=student_project.projectID") or die(mysqli_error());
		
        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
        return $rows;
    }



    function getProposalDate($psp) {
		$resultss = $this->object()->query("SELECT title,startDate,endDate from setting where settingType='$psp'");
        $count=$resultss->num_rows;
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}


	function registerProject($title,$problem,$currentS,$proposedS,$mainO,$antF,$hardR,$SoftR,$year,$tecID) {
		$con=$this->object();
		$result=$con->query("insert into project (title,problem_statement,current_situation,proposed_solution,main_objectives,anticipated_artifact,hardware_requirement,software_requirements,year,techID)"
                    . "values ('$title','$problem','$currentS','$proposedS','$mainO','$antF','$hardR','$SoftR','$year','$tecID')")or die(mysqli_error($con));
					
			return $con->insert_id;
	}

	function updateProject($projectID,$title,$problem,$currentS,$proposedS,$mainO,$antF,$hardR,$SoftR,$year,$tecID) {
		$this->object()->query("UPDATE project SET title='$title',problem_statement='$problem',current_situation='$currentS',proposed_solution='$proposedS',main_objectives='$mainO',anticipated_artifact='$antF',hardware_requirement='$hardR',software_requirements='$SoftR',year='$year',techID='$tecID' where projectID='$projectID'")or die(mysqli_error());
					
	}

	function completeProject($projectID,$future,$abstract) {
				
		$this->object()->query("UPDATE project SET future='$future',abstract='$abstract' where projectID='$projectID'");
        
        		
					
		}

	function addResult($design,$doc,$system,$id) {
		$this->object()->query("insert into result (design_marks,doc_marks,pres_marks,Id)"
                    . "values ('$design','$doc','$system','$id')");   
					
		}

	function viewResult($id) {
		$resultss = $this->object()->query("SELECT * from result where Id='$id'");
        $count=$resultss->num_rows;
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}

	function updateResult($design,$doc,$system,$id) {
				
		$this->object()->query("UPDATE result SET design_marks='$design',doc_marks='$doc',pres_marks='$system' where resultID='{$id}'");
        
        		
					
		}

	function addStudentProject($stdID,$projectID)

	{
		$results = $this->object()->query("SELECT stdID FROM student_project WHERE stdID='$stdID'");
        if ($results->num_rows) {
        	return false;
        }
		else{
			$con=$this->object();
		$con->query("insert into student_project (stdID,projectID)"
                    . "values ('$stdID','$projectID')")or die(mysqli_error($con));
				return true;
		      
		}

		
	}

	function upload($name,$path,$projectID) {
		$this->object()->query("insert into project_delivarable (name,path,projectID)"
                    . "values ('$name','$path','$projectID')")or die(mysqli_error($this->object()));      
		}

	function announce($title,$path,$startDate,$endDate) {
		$this->object()->query("insert into announcements (title,path,startDate,endDate)"
                    . "values ('$title','$path','$startDate','$endDate')")or die(mysqli_error($this->object()));      
		}

	function viewAnnouncement() {
		$resultss = $this->object()->query("SELECT * FROM announcements  ORDER BY startDate ASC");

        $count=$resultss->num_rows;
        
		$rows = array();
        while ($count>=1) {
			$rows[] = $resultss->fetch_array();
			$count--;
            
        }
		return $rows;
        
	}
		

	function file_uploaded($IMAGE,$dir_to=""){
    global $errors;
    	function getFileExtention($fileName){
		    $explode=explode('.',$fileName);        
		    $ext = strtolower(array_pop($explode));
		    return $ext;        
		    
		    
		} 
    $upload_errors=array(UPLOAD_ERR_OK => "No errors.",UPLOAD_ERR_INI_SIZE =>"Larger than upload_max_filesize.",UPLOAD_ERR_FORM_SIZE =>"Larger than form MAX_FILE_SIZE.",UPLOAD_ERR_PARTIAL => "Partial upload.",UPLOAD_ERR_NO_FILE =>"No file selected.",UPLOAD_ERR_NO_TMP_DIR =>"No temporary directory.",UPLOAD_ERR_CANT_WRITE =>"Can't write to disk.",UPLOAD_ERR_EXTENSION =>"File upload stopped by extension.");  
    $error = $IMAGE['error'];
    $message = $upload_errors[$error]; 
    $Allowed_mime_types = array('png' => 'image/png','jpeg' => 'image/jpeg','jpg' => 'image/jpeg','gif' => 'image/gif','pdf' => 'application/pdf',
        'docx'=>'application/msword','doc' => 'application/msword','xls' => 'application/vnd.ms-excel','pptx'=>'application/vnd.ms-powerpoint',
        'ppt' => 'application/vnd.ms-powerpoint','xlsx'=> 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'txt'=>'text/plain','csv'=>'application/vnd.ms-excel','zip'=>'application/x-zip-compressed');
                 
    $name=basename($IMAGE["name"]);
    $temp=$IMAGE["tmp_name"];  

    if ($message =="No errors."){
        if(!file_exists($dir_to.$name)){
            $ext=getFileExtention($name);     
            if (array_key_exists($ext, $Allowed_mime_types)) {
                if ($IMAGE["size"]< 50020974){
                    return $IMAGE;
                }else{
                    $errors[]= "The file size must be less then 50MB";
                }               
            } else {        
                $errors[]= "Error: Unsupported file type";
            }
        }else{
            $errors[]="The image {$name}, is allready exist";
        } 
    }else{
        $errors[]=$message;
    }
    
   

}
	
}